import numpy as np
import cv2 as cv

# Returns the convolutional kernel of a differential of gaussian
# with respect to x
def getDoGX(w, sigma):
    K=np.zeros((2*w+1,2*w+1))
    alpha= 1/(2*np.pi*np.power(sigma,4))
    beta= -1/(2*sigma*sigma);
    for i in range(-w,w+1):
        for j in range(-w,w+1):
            print(f"{j},{i}")
            K[j+w,i+w]=i*alpha*np.exp(beta*(i*i+j*j))
    return K

def getDoGY(w, sigma):
    K=np.zeros((2*w+1,2*w+1))
    alpha= 1/(2*np.pi*np.power(sigma,4))
    beta= -1/(2*sigma*sigma);
    for i in range(-w,w+1):
        for j in range(-w,w+1):
            print(f"{j},{i}")
            K[j+w,i+w]=j*alpha*np.exp(beta*(i*i+j*j))
    return K

# mouse callback function
def mouse_callback(event,x,y,flags,param):
    if event == cv.EVENT_LBUTTONDOWN:
        print(f"You have clicked on point {x}, {y}")
        dx=gradX[y,x]
        print(f"DX = {dx}")


# Load the "shape" image
tmp = cv.imread('Img/shapes.png')
# Load the image in grayscale
#img = cv2.imread("image.jpg", cv2.IMREAD_GRAYSCALE)

# Convert it to greylevels if it is a color image
if (tmp.ndim > 2):
    src=cv.cvtColor(tmp,cv.COLOR_BGR2GRAY)
else:
    src=tmp
    
gradX=cv.filter2D(src, cv.CV_32F, getDoGX(2,0.25))
cv.namedWindow('gradX')
cv.imshow('gradX', gradX)

gradY=cv.filter2D(src, cv.CV_32F, getDoGY(2,0.25))
cv.namedWindow('gradY')
cv.imshow('gradY', gradY)

def harris(Gx, Gy, x, y, w, k=0.15):
    # Initialize Harris matrix
    Harris = np.zeros((2,2))

    # Compute the sum of products of the gradients
    for i in range(-w, w+1):
        for j in range(-w, w+1):
            Harris[0,0] += Gx[y+j, x+i]**2
            Harris[0,1] += Gx[y+j, x+i]*Gy[y+j, x+i]
            Harris[1,0] += Gx[y+j, x+i]*Gy[y+j, x+i]
            Harris[1,1] += Gy[y+j, x+i]**2
    # Compute Harris score
    det = Harris[0,0]*Harris[1,1] - Harris[0,1]**2
    trace = Harris[0,0] + Harris[1,1]
    score = det - k*trace**2
    return Harris, score
# Set the point coordinates and window size
x = 100
y = 150
w = 5

# Compute the Harris matrix and score
Harris, score = harris(gradX, gradY, x, y, w)

print("Harris matrix:")
print(Harris)
print("Harris score:", score)


#gradY= cv.filter2D(src, cv.CV_32F, getDoGY(2,O.25))

cv.namedWindow('source')
cv.setMouseCallback('source',mouse_callback)
while(1):
    cv.imshow('source',src)
    if cv.waitKey(20) & 0xFF == 27:
        break


cv.destroyAllWindows()
