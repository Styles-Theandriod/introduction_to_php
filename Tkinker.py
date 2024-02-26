import tkinter as tk

def say_hello():
    label.config(text="Hello, Tkinker!!")


# Create the main window 
root = tk.Tk()

# Create a label widget
label = tk.Label(root, text="Welcome to Tkinker!")

#Pack the label into the window 
label.pack(pady=10)

# Create a button and associate it with the say_hello function
button = tk.Button(root, text="Click Me", command=say_hello)
button.pack(pady=10)

# Variable to store the check state
check_var = tk.BooleanVar()

# Set up check button
check_button = tk.Checkbutton(root, text="Check Me", variable=check_var, )

# Pack check button into the window
check_button.pack()


# Create an Entry widget
entry = tk.Entry(root, width=30)

entry.pack(pady=10)

# Run the Tkinter event loop
root.mainloop()