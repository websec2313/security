import mysql.connector
import os
from dotenv import load_dotenv, dotenv_values

load_dotenv()
name1 = os.getenv("USER")
password = os.getenv("PASSWORD1")



with mysql.connector.connect(user='root', password='', host='localhost', database='customer') as conn:
               cursor = conn.cursor()
               
               name = "dharnesh"
               query = 'SELECT id,username,password,email FROM users WHERE username = %s'
               cursor.execute(query,(name,))
               row = cursor.fetchall()
                   
  
               for i in row:
                 user_id=i[0] 
                 username_1=i[1]
                 password_1=i[2]   
                 user_email=i[3] 
                
               


               query1= 'UPDATE users set username = %s, password= %s where id=%s'
               
               cursor.execute(query1,(name1,password,user_id))
               conn.commit()


               print("Updated successfully")