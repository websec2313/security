import os
import smtplib
import ssl
import sys
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from dotenv import load_dotenv, dotenv_values

load_dotenv()

email=sys.argv[1]
print(email)



SMTP_SERVER = "smtp.gmail.com"
PORT = 587
EMAIL = os.getenv("EMAIL")
PASSWORD = os.getenv("PASSWORD")

subject = "Security Allert! Invalid login attempt"
receiver_email = email

message = MIMEMultipart("mixed")
message["From"] = EMAIL
message["To"] = receiver_email
message["Subject"] = subject

filename = "reset.html"
#for name in user:
#    name1=user
text = """\
Hi user,

To ensure the security of your Faseful.2K account. We have noticed multiple Invalid login attempts from your account. 
kindly reset your password if it is not you.

For password resets.
[Reset your Password]

Stay Secure,
Faseful.2K
"""


with open(filename, "r") as file:
    html = file.read()

part1 = MIMEText(text, "plain")
part2 = MIMEText(html,"html")

message.attach(part1)
message.attach(part2)

text = message.as_string()

context = ssl.create_default_context()
with smtplib.SMTP(SMTP_SERVER, PORT) as server:
    server.starttls(context=context)
    server.login(EMAIL, PASSWORD)
    server.sendmail(EMAIL, receiver_email, text)
