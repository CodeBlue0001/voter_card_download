from pymongo import MongoClient
import gridfs


client = MongoClient("mongodb+srv://User-devwithme:user-devwithme@api-checkup.it4iz.mongodb.net/?retryWrites=true&w=majority")
db = client['new_voter_register_db']
collection = db['voter_register_collection']
fs = gridfs.GridFS(db)

from bson import ObjectId

image_id = ObjectId("680b7cd68ea2841fbca6dfb0")  # Replace with the actual ObjectId
file = fs.get(image_id)

if file:
    with open("retrieved_image.jpg", "wb") as f:
        f.write(file.read())
    print("Image retrieved successfully!")
else:
    print("Image not found.")