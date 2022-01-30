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
3. Create a new database
4. Run ```composer install```
5. Run ```npm install```
6. Run ```npm run dev```
7. Copy the ```.env.example``` in the same folder and rename it to ```.env```
8. Edit the ```.env``` file  with the following parameters: <br> <br>
DB_PORT= **YOUR MYSQL PORT** (default should be '3306')<br>
DB_DATABASE=**THE NAME OF YOUR DATABASE**<br>
DB_USERNAME=**YOUR DATABASE USERNAME** (default should be '**root**')<br>
DB_PASSWORD=**YOUR DATABASE PASSWORD** (default should be '**root**' or **empty**)<br><br>
8. Run ```php artisan key:generate```<br>
9. Run ```php artisan migrate```<br>
10. Run ```php artisan db:seed --class=ComicsTableSeeder```
11. Run ```php artisan serve```<br>
12. **You're all set up!**

## Description
This project is a remaster of [the previous DC Comics project i made in Laravel.](https://github.com/Obez99/laravel-comics)<br>
In this version I implemented a **CRUD** that adds the feature to **create**,**read**,**update** and **destroy** comics.

## Features
- Recycled layout.
- **Hoverable comics**.
- **Show a single comic** when it is clicked.
- A button to **create a new comic**.
- A button to **update an existing comic**.
- A **validator** to prevent invalid values when creating or updating a comic.
- A button to **delete a specific comic**.
- An **alert box** to make sure the user wants to delete a comic.

## Screenshots

![comics1](https://user-images.githubusercontent.com/85038274/151714448-7dbbffff-1983-44dc-a053-e752f4d0ea8b.PNG)

![comics2](https://user-images.githubusercontent.com/85038274/151714453-5a937998-4350-406c-bf13-ca666aad1690.PNG)

![comics3](https://user-images.githubusercontent.com/85038274/151714456-08d4216b-bb5b-4b30-b442-25804b9183dc.PNG)

![comics4](https://user-images.githubusercontent.com/85038274/151714489-3257d8a0-9281-4a5d-85f3-4b0421fd4416.PNG)
