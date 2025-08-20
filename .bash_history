composer create-project laravel/laravel .
composer create-project laravel/laravel temp
mv temp/* temp/.* . 2>/dev/null || true
rm -rf temp
exit
php artisan make:model Data -m
php artisan make:factory DataFactory
php artisan make:controller DataController --resourse
php artisan make:controller DataController -r
php artisam migrate
php artisan migrate
php artisan migrate -fresh
php artisan migrate:fresh
php artisan make 
php artisan make:interface DataGeneratorInterface
php artisan make:interface Interfaces/DataGeneratorInterface
php artisan make:service Services/DataGeneratorService
exit
