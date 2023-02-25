import cv2
import numpy as np

cap = cv2.VideoCapture(0)
cap.set(3, 640) #id for the width is 3
cap.set(4, 480) #id for the height is 4
cap.set(10, 150) #id for the brighness is 10

# Get pointer to video frames from primary device
def findColor(image):
    imageYCrCb = cv2.cvtColor(image,cv2.COLOR_BGR2YCR_CB)
    min_YCrCb = np.array([0, 133, 77], np.uint8)
    max_YCrCb = np.array([235, 173, 127], np.uint8)
    skinRegionYCrCb = cv2.inRange(imageYCrCb, min_YCrCb, max_YCrCb)
    cv2.imshow("img", skinRegionYCrCb)

while True:
    success, image = cap.read()
    findColor(image)
    cv2.imshow("video", image)
    if cv2.waitKey(1) & 0xFF ==ord('q'):
        break