"""
    Python decorator: @property
        Used to define a method as an attribute where you can
            'do something' before returning it.

    Pros: 
        Add logic when reading, writing or deleting attributes

    Types:
        getter
        setter
        deleter
"""

class Person
    def __init__(self, name):
        self.__name = name

    # The getter.
    # You can add logic before returning the attributes
    # You dont need to if youre not doing something before returning
    #   or needs a setter
    @property
    def name(self):
        return f"{__name.capitalize()}"

    # The setter
    # You can add logic before overwriting an attribute like validations
    @name.setter
    def name(self, new_name):
        if len(new_name) == 0:
            raise ValueError("Name cannot be empty.")

        self.__name = new_name

    # The deleter
    # You can now set what happens when using `del` keyword to delete attributes
    @name.deleter
    def name(self):
        del self.__name
