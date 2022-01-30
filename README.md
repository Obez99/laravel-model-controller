<p align="center"><img src="https://s29.postimg.cc/xqf5iv9kn/laravel_logo_white.png" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Setup
1. Clone this repository
2. Start your local server
3. Run ```composer install```
4. Run ```npm install```
5. Run ```npm run dev```
6. Run [this file](movies.sql) in your mysql database.
7. Copy the ```.env.example``` in the same folder and rename it to ```.env```
8. Edit the ```.env``` file  with the following parameters: <br> <br>
DB_PORT= **YOUR MYSQL PORT** (default should be '3306')<br>
DB_DATABASE=**THE NAME OF YOUR DATABASE**<br>
DB_USERNAME=**YOUR DATABASE USERNAME** (default should be '**root**')<br>
DB_PASSWORD=**YOUR DATABASE PASSWORD** (default should be '**root**' or **empty**)<br><br>
9. Run ```php artisan key:generate```<br>
10. Run ```php artisan serve```<br>
11. **You're all set up!**

## Description
In this exercise I created a similar version of [my previous netflix project](https://github.com/Obez99/vue-boolflix) using Laravel.<br>
To make this project possible I created a ```Movie``` model and a controller named ```MovieController``` wich has an index function that returns a view with every ```Movie``` instances from the database.


## Screenshots

![laravelmovies](https://user-images.githubusercontent.com/85038274/151713372-69eeb387-5b9a-4a65-9d82-5155ffb3b086.PNG)
