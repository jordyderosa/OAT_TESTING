<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

The project use laravel as framework so you can clone this repo but you have to install the dependecy by launching the command 
```sh
composer install
```
and everything will work immediately.

## About Software Design
This is just a quick report about my implementation.
To gain more flexibility and reutilisation i've used the Repository Pattern Design. In this way you can have a different layer to deal with your persistance. In fact you can easly add a new repository that implement a reposity interface and your controller will continue to work without problem. (i'm thinking about migrate to other persistance).
With more time there are others improvements to do like create ValueObject to have all the validation rules under a class: if the project will add save to persistence task you should validate the inputs so it will be helpfull to have a ValueObject to deal with. This will be more flexible and mantainable and by injecting ValueObject into my functions i will be sure to have all my objects in a valid state without breaking the whole software process. Having a ValueObject to store all the validantions rules will help you to don't repeat rules in every form.

