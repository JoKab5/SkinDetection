import cv2
import numpy as np

cap = cv2.VideoCapture(0)
cap.set(3, 640) #id for the width is 3
cap.set(4, 480) #id for the height is 4
cap.set(10, 150) #id for the brighness is 10


def findColor(img):

    #blur = cv2.GaussianBlur(img, (3,3), 0)
    hsv = cv2.cvtColor(img, cv2.COLOR_RGB2HSV)

    lower_color = np.array([108, 23, 82])    # h_min, s_min, v_min
    upper_color = np.array([179, 255, 255])  # h_max, s_max, v_max

    mask = cv2.inRange(hsv, lower_color, upper_color)


    cv2.imshow("img", mask)
    # cv2.imshow("img", hsv_d)

while True:
    success, img = cap.read()
    findColor(img)
    cv2.imshow("video", img)
    if cv2.waitKey(1) & 0xFF ==ord('q'):
        break