import mysql.connector
import csv



with open("name2.csv", 'r') as file:
    csvreader = csv.reader(file)
    header = next(csvreader)
    for row in csvreader:
         user_id = row[0] 
         print(user_id)
         unlockuser = row[1]
         unlockpassword = row[2]  
         unlockemail = row[3]


with mysql.connector.connect(user='root', password='', host='localhost', database='customer') as conn:
               cursor = conn.cursor()
               
               name_secure_id = user_id
               query = 'SELECT id,username,password FROM users WHERE id = %s'
               cursor.execute(query,(name_secure_id,))
               row = cursor.fetchall()
                   
  
               for i in row:
                 user_secure_id=i[0] 
                 username_secure=i[1]
                 password_secure=i[2]   
                 
               


               query1= 'UPDATE users set username = %s, password= %s where id=%s'
               
               cursor.execute(query1,(unlockuser,unlockpassword,user_secure_id))
               conn.commit()


print("Updated successfully")




