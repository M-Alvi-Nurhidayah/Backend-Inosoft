# Backend Inosoft Techincal Test Stage 2 <br>
This repository is made for Backend Technical Test Stage 2 for Inosoft Trans Sistem Company.<br>
With Laravel 8 and PHP 8 Framework as web application framework.<br>
MongoDB as a non-relational document database.<br>

## Main Tech Stack:<br>
- Build with Linux Elementary OS 6.1 Juno
- PHP 8 as a Programming Language
- Laravel 8 as a web application framework
- MongoDB 4.2 as a database management

## Installation Guidlines :<br>
<ol>
    <li>
      <a href="##laravel8">Laravel 8 installation and Configuration</a>
    </li>
    <li>
      <a href="##mongodb">MongoDb installation and Configuration</a>
    </li>
    <li>
      <a href="##configuration">Configuration and package installation</a>
    </li>
    <li>
      <a href="##jwtauth">JWT Auth Installation and Configuration</a>
    </li>
    <li>
      <a href="##mvc">Create Table and Model (MVC)</a>
    </li>
</ol>

## Laravel8 <br>
### Requirement
1. PHP [Installation](https://computingforgeeks.com/how-to-install-php-on-ubuntu-2)<br>
    * Make sure your PHP version using this syntax and write in command line
    ```sh
      php -v
    ```
2. Composer [Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)<br>
    * Make sure your composer is already installed
    ```sh
      composer
    ```
3. Create project Laravel using Composer <br>
    * Create folder wherever you want and create a project using composer
    ```sh
      composer create-project laravel/laravel:^8.0 yourappname
    ```
4. MongoDB [Installation] (https://www.mongodb.com/compatibility/mongodb-laravel-intergration) and Configuration <br>
    There is some steps to install and make a configuration for MongoDB integrated with laravel <br>
    * Before we can install the MongoDB libraries for Laravel, we need to install the PHP extension for MongoDB. <br>
    Run the following command
    [Install](https://www.technhit.in/laravel-mongodb-integration/) MongoDB
    ```sh
      curl -fsSL https://www.mongodb.org/static/pgp/server-4.4.asc | sudo apt-key add -
      sudo apt update
      sudo apt install mongodb
    ```
    Install the Laravel MongoDB PHP Extension
    ```sh
      sudo pecl install mongodb
    ```
    You will also need to ensure that the mongodb extension is enabled in your php.ini file. The location of your php.ini file will vary depending on your operating system. Add the following line to your php.ini file:
    ```sh
      extension="mongodb.so"
    ```
    Lastly, run the following command from your Laravel project directory in order to add the MongoDB package for Laravel:
    ```sh
      composer require jenssegers/mongodb:^3.9 
    ```
    Run the following command from your Laravel project directory in order to add the JWT package for Laravel:
    ```sh
      composer require tymon/jwt-auth:dev-develop --prefer-source
    ```

## Installation and Testing <br>
1. Clone this project into your local file<br>
    * Paste this command into your terminal
    ```sh
      git clone git@github.com:M-Alvi-Nurhidayah/Backend-Inosoft.git
    ```
2. Going to repository file that you have done clone and make sure you are inside this project
    * Install the dependencies of this project using this command line
    ```sh
      composer install
    ```
    * Do some configuration like database, according to your local database, put in your .env file. Here is some example you can use and paste in your env.
    ```sh
      DB_CONNECTION=mongodb
      DB_HOST=127.0.0.1
      DB_PORT=27017
      DB_DATABASE=testdb
      DB_USERNAME=
      DB_PASSWORD=
    ```
    * Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.
    Laravel’s command line tools thankfully make it super easy to generate this. In the terminal we can run this command to generate that key
    ```sh
      php artisan key:generate
    ```
    * Once your credentials are in the .env file, now you can migrate your database.
    ```sh
      php artisan migrate
    ```
    * (Optional): Seed the database
    ```sh
      php artisan db:seed
    ```
    * Run the program
    ```sh
      php artisan serve
    ```
3. Testing this API app. You can use Postman app to do this test.