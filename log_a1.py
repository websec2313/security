import  mysql.connector
import datetime
import subprocess
import os
import pandas as pd
import pprint

from datetime import date
from dotenv import load_dotenv, dotenv_values

load_dotenv()
name1 = os.getenv("USER")
password = os.getenv("PASSWORD1")


f = open("critical2.log", "r")
list_id1=[]
list_uname1=[]
list_pass1=[]  
list_email1=[]
u1=[]
threshold_name=2



for log in f:
    
    logstrip = (log.strip().split(" "))
    date1 = logstrip[0]
    time1 = logstrip[1]
    user1 = logstrip[3]
    level = logstrip[5]
    
    time1strip = time1.strip().split(",")
    time_1 = time1strip[0]
    
    time_1strip =  time_1.strip().split(":")
    time_m = time_1strip[1]
    time_h=time_1strip[0]
    time_s=time_1strip[2]
    date_1= date1 +" "+time_1

   
    today = date.today()
    today1 = str(today)

    current_time = str(datetime.datetime.now())
    current_timestrip = current_time.strip().split(" ")
    ct_date_1 = current_timestrip[0]
    ct_time1 = current_timestrip[1]
    ct_time1strip = ct_time1.strip().split(".") 
    ct_time_1 = ct_time1strip[0]   
    ct_time_1strip = ct_time_1.strip().split(":") 
    ct_time_m = ct_time_1strip[1]
    ct_time_h=ct_time_1strip[0]
    ct_time_s=ct_time_1strip[2]
    currentdatetime_F = ct_date_1 +" "+ct_time_1


    time_delta = str(datetime.timedelta(hours=0,minutes=25,seconds=50))
    time_deltastrip =  time_delta.strip().split(":")
    timedelta_m = time_deltastrip[1]
    timedelta_h=time_deltastrip[0]
    timedelta_s=time_deltastrip[2]
    
    
    
    
    if today1 == date1 and  abs(int(ct_time_h) - int(time_h)) == (int(timedelta_h))  :
         
         
         
         if abs(int(ct_time_m) - int(time_m)) < (int(timedelta_m)) and abs(int(ct_time_s) - int(time_s)) < (int(timedelta_s)) :

           
           u1.append(user1) 
           c_u1 = u1.count(u1[0])
           #print(c_u1)
           if c_u1 >= threshold_name:
            #print("hi")
             with mysql.connector.connect(user='root', password='', host='localhost', database='customer') as conn:
               cursor = conn.cursor()
               
               name = user1
               query = 'SELECT id,username,password,email FROM users WHERE username = %s'
               cursor.execute(query,(name,))
               row = cursor.fetchall()
                   
  
               for i in row:
                 user_id=i[0] 
                 list_id1.append(user_id)
                 username_1=i[1]
                 list_uname1.append(username_1)
                 password_1=i[2]
                 list_pass1.append(password_1)   
                 user_email=i[3] 
                 list_email1.append(user_email)
                 
                 
               df=pd.DataFrame(columns=['user_id1','user_name1','user_password1','user_email1'])
               print(user_id)
               df['user_id1']=list_id1
               df['user_name1']=list_uname1
               df['user_password1']=list_pass1
               df["user_email1"]=list_email1
               
                 
               pprint.pprint(df)
               df.to_csv("name2.csv",index = False)  
               
               


               query1= 'UPDATE users set username = %s, password= %s where id=%s'
               
               cursor.execute(query1,(name1,password,user_id))
               conn.commit()


               print("Updated successfully")
               
               
p = subprocess.Popen(["python", "mail2.py",user_email], shell=True)
           
f.close()
