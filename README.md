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



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
