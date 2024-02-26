print('Hello world')

Name = "Bizmarrow"


print(Name)

Bullet = 500


# case  function in python 
First_Name = "John"
Last_Name = "Doe"


print(First_Name.upper())
print(Last_Name.lower())

Name = 'john doe'

print(Name.capitalize())


# Data types in python 
first_name = 'Asabeneh'     # str
last_name = 'Yetayeh'       # str
country = 'Finland'         #str 
city= 'Helsinki'            # str
age = 250                   # int, it is not my real age, don't worry about it
height = 50.4 # float
complexValue = 10 + 1j
isPlaying = True # bool
Artist = ['Asake', 'nasbio', 'Burna Boy', 'Kiss Daniel',] 
Student = {'name': 'Vincent', 'age':300, 'BestColor': 'red', }
items = (1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
setOfitems = zip([1,2], [3,4], [5,6])

print(type(age))
print(type(height))
print(type(complexValue))
print(type(isPlaying))
print(type(Artist))
print(type(Student))
print(type(items))
print(type(setOfitems))

print('emmanuel' + str())

# print('welcome to palazo de spegaetti')

# CurrentYear = 2024

# Userinput = int(input('What is your year of birth?'))

# calculate = CurrentYear - Userinput

# print('Your age is: ', calculate)


# indexing in a string in python 

word = 'amaphobia'

print(word[8 : -1] )

language = 'Pythons'

last_index = len(language) - 1

print(last_index)

greeting = 'Hello, world'

print(greeting[::1])

# skipping characters while slicing 


language = 'English'
value = language[0:5:3]
# engl
# ngl
# eng 
# engli 
print(value)

print(language.count(''))


word = 'thirty days of python'
print(word.endswith('on'))


challenge = 'thirty\tdays\tof\tpython'
print(challenge.expandtabs())   # 'thirty  days    of      python'
print(challenge.expandtabs(10)) # 'thirty days of python'

challenge = 'thirty\tdays\tof\tpython'
print(challenge.find('y'))   # 'thirty  days    of      python'
print(challenge.find('th')) 

challenge = 'thirty days of python'
print(challenge.rfind('y')) 
print(challenge.rfind('th'))

first_name = 'mikel '
last_name = 'obi'
age = 250
job = 'teaching'
country = 'Finland'

# sentence = 'I am {} {} with {} years of {}  currently living in {}'.format(first_name, last_name,age,job,country)
# print(sentence)

# user_Input = input('enter your username')

# sentence = 'my name is {}'.format(user_Input)

# print(sentence)

radius = 10
pi = 3.14
area = pi * radius ** 2
result = "the area of a circle of radius {} is {}".format(radius,area)
print(result)

print('welcome to Mathematics Hub!!')

# length = int(input('Provide a length'))
# breadth = int( input('Provide a breadth'))
# area = length * breadth

# print('the length of {} and breadth of {} is {}'.format(length, breadth, area))

challenge = '40DaysPython'
print(challenge.isalnum()) #True

challenge = 'thirty days of python 2019'
print(challenge.isalnum()) # False

# escape characters in python 

# Escape characters in Python are special characters that are used to 
# represent non-printable or special characters within strings. These 
# characters are preceded by a backslash \ to indicate that they should 
# be treated differently. Here are some commonly used escape characters in python

print("Hello\nWorld")
print("Hello\tWorld")
print("Hello\rWorld")
print("This is a backslash: \\")
print('He\'s a programmer.')
print("She said, \"Hello.\"")
print("Hello\bWorld")


# Opeartors in pythons 

# Boolean Operators
# Assignment Operators
# Comparison Operators 
# Logical Operators

print(True)
print(False)

x = 20
y = 30

print(x**2 * y**2)

print('Multiplying complex numbers: ',(1 + 1j) * (1 - 1j))

# Comparison Operatores 
print(3 > 2)     # True, because 3 is greater than 2
print(3 >= 2)    # True, because 3 is greater than 2
print(3 < 2)     # False,  because 3 is greater than 2
print(2 < 3)     # True, because 2 is less than 3
print(2 <= 3)    # True, because 2 is less than 3
print(3 == 2)    
print(3 != 2)    # True, because 3 is not equal to 2
print(len('mango') == len('avocado'))  
print(len('mango') != len('avocado'))  
print(len('mango') < len('avocado'))  
print(len('milk') != len('meat'))      
print(len('milk') == len('meat'))     
print(len('tomato') == len('potato'))  
print(len('python') > len('dragon'))   

print('True == True: ', True == True)
print('True == False: ', True == False)
print('False == False:', False == False)


print('1 is 1', 1 is 1)                   # True - because the data values are the same
print('1 is not 2', 1 is not 2)           # True - because 1 is not 2
print('A in Asabeneh', 'A' in 'Asabeneh') # True - A found in the string
print('B in Asabeneh', 'B' in 'Asabeneh') # False - there is no uppercase B
print('coding' in 'coding for all') # True - because coding for all has the word coding
print('a in an:', 'a' in 'an')      # True
print('4 is 2 ** 2:', 4 is 2 ** 2)   # True

import random

# random_number = random.random()
# print(random_number)

# random_integer = random.randint(1, 10)
# print(random_integer)

random_element = random.randrange(0, 10, 2)
print(random_element)

my_list = [1, 2, 3, 4, 5]
random_choice = random.choice(my_list)
print(random_choice)

my_list = [1, 2, 3, 4, 5]
random.shuffle(my_list)
print(my_list)

import math as emma

result = emma.sqrt(25)
print(result)

# print(int(result))