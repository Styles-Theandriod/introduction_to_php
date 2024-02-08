from datetime import datetime, date, time, timedelta

# Get the current date and time
current_datetime = datetime.now()
print("Current Date and Time:", current_datetime)

# Access individual components of the datetime object
print("Year:", current_datetime.year)
print("Month:", current_datetime.month)
print("Day:", current_datetime.day)
print("Hour:", current_datetime.hour)
print("Minute:", current_datetime.minute)
print("Second:", current_datetime.second)


# Create a specific date and time
specific_datetime = datetime(2022, 6, 15, 14, 30, 0)
print("Specific Date and Time:", specific_datetime)

# Format a datetime object as a string
formatted_datetime = current_datetime.strftime("%Y-%m-%d %H:%M:%S")
print("Formatted Date and Time:", formatted_datetime)


# Parse a string to create a datetime object
parsed_datetime = datetime.strptime("2022-06-15 14:30:00", "%Y-%m-%d %H:%M:%S")
print("Parsed Date and Time:", parsed_datetime)


# Get the current date
current_date = date.today()
print("Current Date:", current_date)

# Create a specific date
specific_date = date(2022, 6, 15)
print("Specific Date:", specific_date)

# Perform date arithmetic
future_date = current_date + timedelta(days=7)
print("Future Date (7 days later):", future_date)

# Get the current time
current_time = datetime.now().time()
print("Current Time:", current_time)