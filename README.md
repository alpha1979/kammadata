## About Test Project KAMMADATA with application refferal V1.0
## Overview
This project is based on the laravel 8.0 and mysql database. We use the laravel ORM feature. This application save the Name, Friend's Name and Friend's Email address to database and it also send the email to given email address.
The front end is built on laravels blade.
Majority of the UI has been done using bootstrap css and some custom css style has also been used.


To store in the database we used the laravel default [Migration](https://laravel.com/docs/8.x/migrations). 
Migration: 2021_07_03_110330_create_send_emails_table.php

We have following file structure:
 - Controller: MainController and SendEmailController.php
 - Mail: SendEmail.php // different namespace even though same file name
 - Model: SendEmail.php // different namespace even though same file name
 
Phpunit test :-
- asserthasview test done for welcome and sendemail page
- need testing for form validation 

_Note: 
1) Install the laravel using your prefered method
2) Clone the project from github repo
    - https://github.com/alpha1979/kammadata.git
3) Open it in your choice of ide 
4) use cli to install composer dependency 
    - composer install
5) copy the .env.example file to .env
6) cli command to generate key
    - php artisan key:generate
7) set up database and update the .env file with database info if not already there
    -   DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=kammadata
        DB_USERNAME=root
        DB_PASSWORD=
8) Here we have used the [mailtrap](https://mailtrap.io/) to test email. You have to update the .env file with mailtrap configuration from your setting 
    -   MAIL_MAILER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=xxxxxxxxxxxxx
        MAIL_PASSWORD=xxxxxxxxxxxxx
        MAIL_ENCRYPTION=tls
        MAIL_FROM_NAME="${APP_NAME}"

9) you need to migrate the db
    - php artisan migrate
10) you need to seed the database
    - php artisan db:seed
11) Ready to go :- php artisan serve
12) navigation:-
    - Views: 
    - Welcome page http://localhost:8000/
    - Send email page http://localhost:8000/sendemail
    - Friends custom email page with the sender name will be sent to friend's email



V 1.1 will be coming soon with few updates 
    - login/sign up for the registered user
    - refferal will be added to the user account
    - receving confirmation to guest account
    - top nagivation bar 