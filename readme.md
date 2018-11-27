<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
	Laravel 5.6 Car Rental Site
<p align="center">

</p>

# Laravel 5.6 Car Rental Site

## Features

* User sign in and sign up
* Display cars by types
* Simple search cars function
* Book selected car with pick up and drop off date
* Check booking status and cancel pending booking by user
* Cars, car types and bookings management for Admin.

 - composer install
 - composer require anlutro/l4-settings
 - php artisan vendor:publish --provider="anlutro\LaravelSettings\ServiceProvider" --tag="config"
 - composer require barryvdh/laravel-cors
 - php artisan key:generate
 - php artisan route:list
 - chmod -R 777 storage/*
 - php artisan db:seed --class=UsersTableSeeder
 - php artisan make:test UserFactory
 - php artisan config:cache


## Mudar para Laravel 5 Middleware
Eu tenho um BaseControllerque tem isso no construtor:
$this->beforeFilter('auth');

use o $this->middleware()método em qualquer controlador ou seus métodos.

´´´
public function __construct()
    {
        $this->middleware('auth');
    }
´´´

### Caso precise alterar config/app.php
- composer dump-autoload
- php artisan clear-compiled
- php artisan config:cache
- php artisan config:clear
- php artisan cache:clear
- composer update
- php artisan make:auth

### Teste controller e model :
- php artisan make:controller CustomersController --model=Customer
# cars

- Fonte: https://github.com/jguan/laravel-4.1-car-rental-site
