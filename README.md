# Tracker-Laravel (Backend)

Simple time tracker for tasks built with Angular 6 and Lumen.

## Run Locally 

1- `git clone git@github.com:MostafaAttia/tracker-laravel-backend.git`

2- `composer install`

3- create a database and update .env file

4- `php artisan migrate`

5- `php -S localhost:8000 -t public` if you want to use another port other than 8000, please update the `url` variable in the `task.service.ts` here: `https://github.com/MostafaAttia/tracker-laravel-frontend/blob/master/src/app/services/task.service.ts`
