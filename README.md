[![Laravel](https://github.com/StevyMarlino/harmonie-web/actions/workflows/laravel.yml/badge.svg)](https://github.com/StevyMarlino/harmonie-web/actions/workflows/laravel.yml)

### Init voyager
```bash
    php artisan voyager:install --with-dummy
```

### user information
```php
    email: admin@admin.com
    password: password
```

###
```bash
php artisan db:seed --class=VoyagerDatabaseSeeder
```
```bash
php artisan storage:link
```
```bash
composer dump-autoload
```