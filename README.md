# WELCOME TO TIDYUP
This is a project of Pristeam. </br>
This is an app where you can browse, book and appointment to any of your chosen shop. </br>
This app also let's you set up your own shop to be browsed by the customers. </br>
giving business owners an opportunity to showcase their shops and gain more client through our platform.

# CLONING AND SETTING UP LARAVEL PROJECT

- 1st, Make sure that your branch is the same as the main branch.
- 2nd, Open the Project On VS Code, and Press Ctrl + ` to Open the terminal (Make sure the directory is in the folder of TidyUp).

## WARNING!!
THIS IS ASSUMING YOU ALREADY INSTALLED COMPOSER IN YOUR SYSTEM </br>
PLEASE REFER TO INSTALLATION GUIDES IF NOT YET INSTALLED IN YOUR SYSTEMS </br>
To see if your system has composer installed run the command
"composer -v" in your cmd.
```
composer -v
```

- 3rd, Run the command "composer install" in the terminal.
```
composer install
```
- 4th, Run the command "cp .env.example .env" in the terminal.
```
cp .env.example .env
```
- 5th, Run the command "php artisan key:generate". in the terminal.
```
php artisan key:generate
```
- 6th, inside the .env file update the default lines of code to this code as shown below:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tidyup
DB_USERNAME=root
DB_PASSWORD=
```

(you may edit it according to your xampp settings)

- 7th, run the command "php artisan storage:link" in the terminal.
```
php artisan storage:link
```
- 8th, make database in phpmyadmin. name it same with the DB_DATABASE in the .env file 
- 9th, make sure you xampp's Apache and MySql is running then, run the command "php artisan migrate" in the terminal.
```
php artisan migrate
```
- 10th, run the command "php artisan serve" (dont close the terminal for it to keep the processses running in the background)
  now copy the link, example "http://127.0.0.1:8000/", then paste it in your chosen broswer .
```
php artisan serve
```
![image](https://github.com/user-attachments/assets/edfc360c-8039-45c8-8566-6bd320fbbd26)
- 11th, then make a new terminal by pressing the plus button in the top right of your terminal </br>
![image](https://github.com/user-attachments/assets/97b94aa5-3432-4921-a7bb-26514b07ac5f)
- 12th, run the command "npm install" to install the node_modules.
```
npm install
```
- 13th, run the command "npm run dev" in the terminal (also dont close this terminal for it to keep the proccesses running in the background).
```
npm run dev
```
- if there is no error congrats you are done.

# HOW TO GET EMAIL FROM GOOGLE
you need to modify your .env file and have access to your google account.

in your .env file try to find the section for mails (press ctrl + f and search mail)
![Screenshot 2024-11-07 212549](https://github.com/user-attachments/assets/137993f4-e682-451c-8bf2-4e402dff55a6)

once you found it replace the all the block of code there with this code
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=" "
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="your_email@gmail.com"
MAIL_FROM_NAME="Your Name or App Name"

```

Make sure you use your email address. 

Now go into your google account and click on manage google account
![Screenshot 2024-11-07 213344](https://github.com/user-attachments/assets/27bb8933-4a56-448f-b51e-ab258c2900f7)
then go to Security and enable the 2-step verification
![Screenshot 2024-11-07 213526](https://github.com/user-attachments/assets/67282d59-a329-45ba-a827-7bedececf300)
After that go and search for the app passwords
![Screenshot 2024-11-07 213624](https://github.com/user-attachments/assets/81d43fbc-48af-473b-88e1-5e8a6b492ade)
enter the app name "Laravel" then press create.

if you see something like this copy it
![Screenshot 2024-11-07 213757](https://github.com/user-attachments/assets/5e0b779f-6242-4f4b-aa7d-4812a92fd9d2)

then go back to your .env file and place it in the MAIL_PASSWORD=" " (put ut inside " " cus the password has spaces)

go into your terminal in vscode and enter the command 
```
php artisan config:cache
```


and your done! test it and see if it works
if problem occurs, contact me on my socials at facebook pauldanielojales or email me at pauldanielojales@gmail.com













