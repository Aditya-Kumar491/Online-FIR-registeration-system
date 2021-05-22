# Used to change filepaths
from pathlib import Path

# We set up matplotlib, pandas, and the display function
#%matplotlib inline
import matplotlib
matplotlib.use("TkAgg")
import matplotlib.pyplot as plt
from IPython.display import display
import pandas as pd

# import numpy to use in this cell
import numpy as np

# import Image from PIL so we can use it later
from PIL import Image

# generate test_data
test_data=np.random.beta(1, 1, size=(100, 100, 3))

# display the test_data
plt.imshow(test_data)
#plt.show()
# open the image
#m=input() for user image input
img =Image.open('20200629_090246-1.jpg')

# Get the image size
img_size = img.size

print("The image size is: {}".format(img_size))

# Just having the image as the last line in the cell will display it in the notebook
display(img)
img.show()#display image
# Crop the image to 25, 25, 75, 75
img_cropped =img.crop((25,25,75,75))
display(img_cropped)
img_cropped.show()
# rotate the image by 45 degrees
img_rotated =img.rotate(45)
display(img_rotated)
img_rotated.show()

# flip the image left to right
img_flipped =img.transpose(Image.FLIP_LEFT_RIGHT)
display(img_flipped)
img_flipped.show()
# Turn our image object into a NumPy array
img_data = np.array(img)

# get the shape of the resulting array
img_data_shape = img_data.shape


print("Our NumPy array has the shape: {}".format(img_data_shape))

# plot the data with `imshow` 
# ... YOUR CODE FOR TASK 4 ...
plt.show()

# plot the red channel
plt.imshow(img_data[:,:,0], cmap=plt.cm.Reds_r)
plt.show()

# plot the green channel
plt.imshow(img_data[:,:,1], cmap=plt.cm.Greens_r)
plt.show()

# plot the blue channel
plt.imshow(img_data[:,:,2], cmap=plt.cm.Blues_r)
plt.show()
