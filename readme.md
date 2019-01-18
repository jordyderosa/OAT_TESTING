<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

The project use laravel as framework so you can clone this repo and launch command 
    composer install
     and everything will work immediately.
## About Software Design
This is just a quick report about my implementation.
To gain more flexibility and reutilisation i've used the Repository Pattern Design. In this way you can have a different layer to deal with your persistance. In fact you can easly add a new repository that implement a reposity interface and your controller will continue to work without problem. (i'm thinking about migrate to other persistance)
With more time there are other improvement to do like create ValueObject to have all the validation rules under a class , inject this object into my functions to be sure to have all my object in a valid state without breaking the wall software process and to have a only one place to manage all my validations rules.
Of course i can add comments to my code to add more readbility to my code
