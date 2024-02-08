print("Hello, world!")

Name = "John Smith"
print(Name)

Name = "John"
LastName = "Smith doesn"

print(Name , LastName)

# dataTypes in python 
# strings 
# numbers 
# float 
# array
# set 
# turple
# dictionary 

Age = 50
sentences = 'i am' + str(Age) + ' years old'
print(sentences)


class Person():
    def __init__(self, fname, lname):
        self.fname = fname
        self.lname = lname

    def printname(self):
        print(self.fname, self.lname)



class student(Person):
    pass

y = student("Mike", "Adenugar")


