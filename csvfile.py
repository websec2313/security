import csv
import subprocess
i=0
list_1=[]
rows = []
n2=[]
n4=[]
u1=[]
u2=[]
u3=[]

with open("name.csv", 'r') as file:
    csvreader = csv.reader(file)
    header = next(csvreader)
    for row in csvreader:
        #print(row)
        rows.append(row[1])
        #print(rows)
    for n1 in rows:
        if n1 == rows[0]:
            while n1 == rows[0]:
                
                u1.append(n1)
                #print(u1)
                n1=+1
            c_u1 = u1.count(u1[0])
            u1_name = u1[0]    
            
            if c_u1 == 3:
                print(u1_name)
                p = subprocess.Popen(["python", "mail.py",u1_name], shell=True)
               
        elif n1 != rows[0]:
            #print(n1)
            n2.append(n1)
            #print(n2)
            for n3 in n2:
                if n3 == n2[0]:
                    #print(n3)
                    while n3 == n2[0]:
                        #print(n3)
                        u2.append(n3)
                        #print(u2)
                        n3=+1 
                    c_u2 = u2.count(u2[0])
                    u2_n = u2[0]    
                    #print(u2_n)
                    if c_u2 == 3:
                       
                      print(u2_n)
                      
                      p1 = subprocess.Popen(["python", "mail.py",u2_n], shell=True)
            #print(n2) 
                      #print(n1)   
                      """   
        else:
            print(n1)
            n4.append(n1)
            #print(n4)
            for n5 in n4:
                if n5 == n4[0]:
                    while n5 == n4[0]:
                        #print(n5)
                        u3.append(n5)
                        n5=+1   
                    c_u3 = u3.count(u3[0])
                    u3_name = u3[0]

                    if c_u3 == 3:
                        print(u3_name)
                        #p1 = subprocess.Popen(["python", "mail.py",u2_name,c_m2], shell=True)                   
                """