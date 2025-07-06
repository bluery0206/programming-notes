# Encapsulation encourages variable and method intended use
# Public    varname    : Like a park bench (anyone can sit).
# Protected _varname   : Like a "Staff Only" door (you can open it, but you shouldn’t).
# Private   __varname  : Like a locked safe (you’d need a blowtorch to open it).

class Player:
    def __init__(self):
        # Values that are supposed to be shown in the user
        self.name = "Stick"

        # Values that can be helpful for devs
        # Can still access this through `class_obj._varname`
        self._location = (123, 31, 123) # eg x,y,z

        # Important values that cannot be shown in public (e.g., passwords)
        self.__password = "dsajlkdjsakld"
