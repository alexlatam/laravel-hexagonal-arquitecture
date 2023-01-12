<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Intallation


Create an unique key for the app and a link folder to storage images and files
```
php artisan generate:key
php artisan storage:link
```

Create a configuration file(on the root project)
```
cp .env.example .env
```

Config database conection on .env file
```
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

After this command, is necessary to create the database. (MySQL is being used)
Then the next command to create the tables and first records on DB
```
php artisan migrate --seed
```

Config email provider on .env file (Mailgun is being used)
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=SSL
MAIL_FROM_ADDRESS="no-reply@qvara.io"
MAIL_FROM_NAME="${APP_NAME}"
MAILGUN_DOMAIN=
MAILGUN_SECRET=
```

Config messaging SMS provider on .env file (Bandwidth is being used)
```
API_ENDPOINT_BANDWITH_MESSAGING=
BANDWIDTH_APP_ID=
BANDWIDTH_USERNAME=
BANDWIDTH_PASSWORD=
BANDWIDTH_ACCOUNT_NUMBER=
BANDIWDTH_LOCATION_ID=
BANDWIDTH_ACCOUNT_USERNAME=
BANDWIDTH_ACCOUNT_PASSWORD=
```
