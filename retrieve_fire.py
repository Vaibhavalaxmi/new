import pyrebase
firebaseConfig = {
    "apiKey": "AIzaSyArLVanC6mad1YqqkENFgiQu9rt1ucBRzU",
    "authDomain": "vertical-e5a18.firebaseapp.com",
	"databaseURL":"https://vertical-e5a18-default-rtdb.firebaseio.com/",
    "projectId": "vertical-e5a18",
    "storageBucket": "vertical-e5a18.appspot.com",
    "messagingSenderId": "299210252256",
    "appId": "1:299210252256:web:1dff10e303a0047397d585",
    "measurementId": "G-3JKB849261"}
firebase =pyrebase.initialize_app(firebaseConfig)
db=firebase.database()
vals=db.child("output").child("result").get()
print(vals.val())