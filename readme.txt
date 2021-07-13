edeexpress11@gmail.com
edeexpress

configuration of xampp for sending mail

Go to C:\xampp\php and open the php.ini file.
Find [mail function] by pressing ctrl + f.
Search and pass the following values:
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = edeexpress11@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"(your own path)

Now, go to C:\xampp\sendmail and open the sendmail.ini file.

Find [sendmail] by pressing ctrl + f.
Search and pass the following values
smtp_server=smtp.gmail.com
smtp_port=587 or 25 //use any of them
error_logfile=error.log
debug_logfile=debug.log
auth_username=edeexpress11@gmail.com
auth_password=edeexpress

restart xampp

Go to edeexpress11@gmail.com.
On the left navigation panel, click Security.
On the bottom of the page, in the Less secure app access panel, click Turn on access.
If you don't see this setting, your administrator might have turned off less secure app account access (check the instruction above).
Click the Save button.