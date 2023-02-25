import cv2 as cv

# Load the "shape" image
tmp = cv.imread('Img/shapes.png')

# Convert it to greylevels if it is a color image
if (tmp.ndim > 2):
    src=cv.cvtColor(tmp,cv.COLOR_BGR2GRAY)
else:
    src=tmp

# Extra conversion to double (32FC1) -> core dump, required in Python?
final=cv.cvtColor(src, cv.CV_8UC1)
laplace=cv.xfeatures2d_HarrisLaplaceFeatureDetector(numOctaves=6, corn_thresh=0.01, DOG_thres=0.01, maxCorners=1000, num_layers=4)
kp=laplace.detect(final)

view=cv2.drawKeypoints(final,  keypoints, np.array([]), (0, 0, 255), cv2.DRAW_MATCHES_FLAGS_DRAW_RICH_KEYPOINTS)

cv.waitKey()
