composer create-project laravel/laravel .
composer create-project laravel/laravel temp
mv temp/* temp/.* . 2>/dev/null || true
rm -rf temp
exit
