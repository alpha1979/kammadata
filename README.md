## About Test Project KAMMADATA

This project is based on the laravel 8.0 and mysql database. We use the laravel ORM feature. This application save the Name, Friend's Name and Friend's Email address to database and it also send the email to given email address.
The front end is built on laravels blade 
Majority of the development has been done using bootstrap css and some own css style has also been used.

To store in the database we used the laravel default [Migration](https://laravel.com/docs/8.x/migrations). 
Migration: 2021_07_03_110330_create_send_emails_table.php

We have following file structure:
 - Controller: MainController and SendEmailController.php
 - Mail: SendEmail.php // different namespace even though same file name
 - Model: SendEmail.php // different namespace even though same file name
 - Views: 
    - Welcome page http://localhost:8000/
    - Send email page http://localhost:8000/send-email
    - Friends custom email page with the sender name


_Note: 
1) Install the laravel using your prefered method either homestead or composer
2) Once the project is cloned
3) Open it in your choice of ide 
3) copy the .env.example file to .env
3) set up database and update the .env file with database info
4) Here we have used the [mailtrap](https://mailtrap.io/) to test email. You have to update the .env file with mailtrap configuration._
