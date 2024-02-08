# import app
# from app import Person


# x = Person("John", "Doe")
# x.printname()
# x.printname()
# x.printname()


# f = open("demofile2.txt", "a")
# f.write("Now the file has more content!")
# f.close()

# #open and read the file after the appending:
# f = open("demofile2.txt", "r")
# print(f.read())

# The try block lets you test a block of code for errors.

# The except block lets you handle the error.

# The else block lets you execute code when there is no error.

# The finally block lets you execute code, regardless of the result of the try- and except blocks.


# try:
#   print(x)
# except:
#   print("An exception occurred")

try:
  print(x)
except NameError:
  print("Variable x is not defined")
except:
  print("Something else went wrong")


try:
  print("Hello")
except:
  print("Something went wrong")
else:
  print("Nothing went wrong")



try:
  print(x)
except:
  print("Something went wrong")
finally:
  print("The 'try except' is finished")


try:
  f = open("demofile.txt")
  try:
    f.write("Lorum Ipsum")
  except:
    print("Something went wrong when writing to the file")
  finally:
    f.close()
except:
  print("Something went wrong when opening the file")


# x = -1

# if x < 0:
#   raise Exception("Sorry, no numbers below zero")


# x = "hello"

# if not type(x) is int:
#   raise TypeError("Only integers are allowed")

print(5 / 0)

# assignment  
# render ZeroDivisionError using try and except block 