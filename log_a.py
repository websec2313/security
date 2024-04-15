import mysql.connector 
import datetime
import subprocess
from datetime import date
import pandas as pd
import pprint

f = open("critical1.log", "r")
list_uname=[]
list_email=[]

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
    currentdatetime_F = ct_date_1 +" "+ct_time_1


    time_delta = str(datetime.timedelta(minutes=10))
    time_deltastrip =  time_delta.strip().split(":")
    timedelta_m = time_deltastrip[1]


    if today1 == date1 and  abs(int(ct_time_m) - int(time_m)) < (int(timedelta_m)) :
       
        
    
         with mysql.connector.connect(user='root', password='', host='localhost', database='customer') as conn:
               cursor = conn.cursor()
    
               name = user1
               query = "SELECT username,email FROM users WHERE username = %s"
               cursor.execute(query, (name,))
               rows = cursor.fetchall() 
               for i in rows:
               
                 user_1 = i[0]
                 list_uname.append(user_1)
                 
                 email_1 = i[1]
                 list_email.append(email_1)
                 
               df=pd.DataFrame(columns=['user_name','user_email'])
               df['user_name']=list_uname
               df['user_email']=list_email
                 
               pprint.pprint(df)
               df.to_csv("name.csv",index = False)    
subprocess.Popen(["python", "csvfile.py"], shell=True)           
f.close()