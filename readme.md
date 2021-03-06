<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

The project use laravel as framework so you can clone this repo. You have to install the dependeces by launching the command
```sh
composer install
```
Then you have to copy .env.example to create your brand new .env config file. From command line you can launch :
Windows 
```sh
copy .env.example .env 
```
Linux
```sh
cp .env.example .env 
```
Final step: create the APP KEY by launching the command

```sh
php artisan key:generate
```
and everything will work immediately.

## About Software Design
This is just a quick report about my implementation.
To gain more flexibility and reutilisation i've used the Repository Pattern Design. In this way you can have a different layer to deal with your persistance. In fact you can easly add a new repository that implement the repository interface to add a new persistance and your controller will continue to work without problem  (i'm thinking about migrate to other persistance). This is because the code is isolated by the persistence.
With more time there could be others improvements to do like create a ValueObject to have all the validation rules under one class: if the project will require a save task you should validate the inputs. In this case it will be helpfull to have a ValueObject to deal with. In this way the code will be more flexible and mantainable and by injecting ValueObject into my functions i will be sure to have all my objects in a valid state without breaking the whole software process. If something will goes wrong the software will raise an exception and i could manage it easly because the error is in only in one piece of my software. Having a ValueObject to store all the validantions rules it will help you to don't repeat code in every forms.
I've design the folder structure to have api versioning and you can choose the right controller by adding a new route to your route/api.php file.

## Endpoints

http://yourdomain/path_to_this_project/public/api/v1/users
parameters available: limit, offset, name

http://yourdomain/path_to_this_project/public/api/v1/user/put_id_here


