# Installation
## Prerequisites
* PHP >= 5.5.9: Can be downloaded from the [PHP website](http://php.net)
* Composer: Follow the instructions on the [Composer website](https://getcomposer.org/doc/00-intro.md)
* Any database system listed in the [Laravel documentation](https://laravel.com/docs/5.2/database)

## Clone the repository
```
git clone https://github.com/osoc16/kleinpas-api.git
cd kleinpas-api
```

## Getting things ready
Copy the .env.example to .env and fill in the environment variables
```
cp .env.example .env
```

### Resolving dependencies
```
composer install
composer update
```

### Creating the database
```
php artisan migrate
```

### Seeding the database
```
php artisan db:seed
```

## Running the application
```
php artisan serve
```
The application should now be running on your local machine.
Look at localhost in a webbrowser to see which requests can be sent to the API.
