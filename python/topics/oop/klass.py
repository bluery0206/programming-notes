
# Class
# A blueprint or a form to be filled up

class Player:

    # The constructor
    #   This identifies what parameters are required unless
    #   it has a default value
    def __init__(self, name, health):
        self.name = name
        self.health = health
    # To put a default value, simply put
    #   parameter = default_value
    #   example:
    #       def method_name(self, health=100):
    #           ...code...

    def __str__(self):
        return f"{self.name}({self.age})"    

    def myfunc(self):
        print("Hello my name is " + self.name)

p1 = Person("John", 36)

print(p1)