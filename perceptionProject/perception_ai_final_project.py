import pandas as pd
import os
import cv2
import numpy as np
import time

data_boxes_2d = pd.read_csv('annotation_CROSS_X-F1-B1_P880043_20200625111459_225/CROSS_X-F1-B1_P880043_20200625111459_225/boxes_2d.csv',sep = ';')

print(data_boxes_2d.head())

data_boxes_3d = pd.read_csv('annotation_CROSS_X-F1-B1_P880043_20200625111459_225/CROSS_X-F1-B1_P880043_20200625111459_225/boxes_3d.csv',sep = ';')

print(data_boxes_3d.head())

image = cv2.imread('ir_CROSS_X-F1-B1_P880043_20200625111459_225/CROSS_X-F1-B1_P880043_20200625111459_225/CROSS_X-F1-B1_P880043_20200625111459_225_cs001_00115.png')

#cv2.imshow('depth image', image)
#cv2.waitKey(0)

img_path = 'ir_CROSS_X-F1-B1_P880043_20200625111459_225/CROSS_X-F1-B1_P880043_20200625111459_225/'
img_list=os.listdir(img_path)
print('img_list: ',img_list)

image1 = cv2.imread('ir_CROSS_X-F1-B1_P880043_20200625111459_225/CROSS_X-F1-B1_P880043_20200625111459_225/CROSS_X-F1-B1_P880043_20200625111459_225_cs001_00211.png')
image2 = cv2.imread('depth_CROSS_X-F1-B1_P880043_20200625111459_225/CROSS_X-F1-B1_P880043_20200625111459_225/CROSS_X-F1-B1_P880043_20200625111459_225_cs001_00211.png')

img = image1 + image2


gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
ret, th = cv2.threshold(gray, 0, 255, cv2.THRESH_BINARY)
cv2.namedWindow('image', cv2.WINDOW_NORMAL)
cv2.imshow("Result", th)
cv2.imwrite('./image_test.png', th)
cv2.waitKey(0)
cv2.destroyAllWindows()

def yolo_detect(pathIn='',
                pathOut=None,
                label_path='darknet/data/coco.names',
                config_path='darknet/cfg/yolov3.cfg',
                weights_path='yolov3.weights',
                confidence_thre=0.5,
                nms_thre=0.3,
                jpg_quality=80):
    LABELS = open(label_path).read().strip().split("\n")
    nclass = len(LABELS)

    np.random.seed(42)
    COLORS = np.random.randint(0, 255, size=(nclass, 3), dtype='uint8')

    base_path = os.path.basename(pathIn)
    img = cv2.imread(pathIn)
    (H, W) = img.shape[:2]

    net = cv2.dnn.readNetFromDarknet(config_path, weights_path)

    ln = net.getLayerNames()
    ln = [ln[i - 1] for i in net.getUnconnectedOutLayers()]

    blob = cv2.dnn.blobFromImage(img, 1 / 255.0, (416, 416), swapRB=True, crop=False)
    net.setInput(blob)
    start = time.time()
    layerOutputs = net.forward(ln)
    end = time.time()

    print('YOLO model casr {:.2f} second to predict'.format(end - start))

    boxes = []
    confidences = []
    classIDs = []

    for output in layerOutputs:

        for detection in output:

            scores = detection[5:]
            classID = np.argmax(scores)
            confidence = scores[classID]

            if confidence > confidence_thre:
                box = detection[0:4] * np.array([W, H, W, H])
                (centerX, centerY, width, height) = box.astype("int")

                x = int(centerX - (width / 2))
                y = int(centerY - (height / 2))

                boxes.append([x, y, int(width), int(height)])
                confidences.append(float(confidence))
                classIDs.append(classID)

    idxs = cv2.dnn.NMSBoxes(boxes, confidences, confidence_thre, nms_thre)

    if len(idxs) > 0:

        for i in idxs.flatten():
            (x, y) = (boxes[i][0], boxes[i][1])
            (w, h) = (boxes[i][2], boxes[i][3])

            color = [int(c) for c in COLORS[classIDs[i]]]
            cv2.rectangle(img, (x, y), (x + w, y + h), color, 2)
            text = '{}: {:.3f}'.format(LABELS[classIDs[i]], confidences[i])
            (text_w, text_h), baseline = cv2.getTextSize(text, cv2.FONT_HERSHEY_SIMPLEX, 0.5, 2)
            cv2.rectangle(img, (x, y - text_h - baseline), (x + text_w, y), color, -1)
            cv2.putText(img, text, (x, y - 5), cv2.FONT_HERSHEY_SIMPLEX, 0.5, (0, 0, 0), 2)

    if pathOut is None:
        cv2.imwrite('with_box_' + base_path, img, [int(cv2.IMWRITE_JPEG_QUALITY), jpg_quality])
    else:
        cv2.imwrite(pathOut, img, [int(cv2.IMWRITE_JPEG_QUALITY), jpg_quality])
        # cv2.imshow('result', pathOut)


pathIn = 'image_test.png'
pathOut = 'test4.png'

yolo_detect(pathIn, pathOut)