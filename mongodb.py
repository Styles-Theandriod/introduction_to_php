from pymongo import MongoClient

# Replace the placeholders with your MongoDB Atlas connection string
connection_string = "mongodb+srv://emma:backspac3@cluster0.zt8pboa.mongodb.net/?retryWrites=true&w=majority"

# Create a MongoClient instance
client = MongoClient(connection_string)




# Access a specific database
db = client.get_database('mydb')

# Access a specific collection (similar to a table in a relational database)
collection = db["Users"]

# Inserts documents into the collection
# document1 = collection.insert({"name": "Employ"})
document1 = {"name": "John Doe", "age": 25, "city": "New York"}
document2 = {"name": "Jane Smith", "age": 30, "city": "San Francisco"}

# Insert one document
result = collection.insert_one(document1)
print("Document 1 inserted with ID:", result.inserted_id)

result = collection.insert_many([document2])
print("Document 2 inserted with ID:", result.inserted_ids)


print('ALL MY COLLECTIONS',db.list_collection_names())

# find all documents in the collection
all_documents = collection.find()
print('ALL MY COLLECTIONS',all_documents)

# Define a query using the "find" method
query = {"name": "John Doe", "age": 25, "city": "New York"}

# Find documents in the collection that match the query criteria
result = collection.find(query)
print(f"Documents with City 'New York':")
for document in result:
    print(document)


# Sort documents in ascending order based on the "age" field
result = collection.find(query).sort("age", 1)

print(f"Sorted Documents with City 'New York' (Ascending):")
for document in result:
    print(document)


# Delete the first matching document
result = collection.delete_one(query)

print(f"Deleted Document: {result.deleted_count} document(s) deleted.")


# Delete all matching documents
result = collection.delete_many(query)

print(f"Deleted Documents: {result.deleted_count} document(s) deleted.")

# Drop the entire collection
collection.drop()

print("Collection dropped.")

# Define the update operation
update_operation = {"$set": {"age": 26, "city": "Boston"}}

# Update the first matching document
result = collection.update_one(query, update_operation)

print(f"Updated Document: {result.modified_count} document(s) updated.")


# Define the update operation
update_operation = {"$set": {"status": "Active"}}

# Update all matching documents
result = collection.update_many(query, update_operation)

print(f"Updated Documents: {result.modified_count} document(s) updated.")


# Update the first three matching documents
result = collection.update_many(query, update_operation, limit=3)

print(f"Updated Documents: {result.modified_count} document(s) updated.")

# List all databases
all_databases = client.list_database_names()
print("All Databases:", all_databases)