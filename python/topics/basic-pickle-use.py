
import pickle

# Load from the file
with open("OBJECT_NAME.pkl", "rb") as file:
    loaded_obj = pickle.load(file)

# Access attributes and methods
print(loaded_obj.ATTR_NAME) 
print(loaded_obj.METHOD_NAME())
