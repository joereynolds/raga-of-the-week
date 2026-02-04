# Run this on the server in the rotw directory
git pull origin master
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev
echo "" | sudo -S service php8.3-fpm reload

# For a completely blank slate
#php artisan migrate:fresh --seed --force
#php artisan app:link-ragas-to-western-scales
# Note that this one is S L O W. Takes several hours
#php artisan app:link-similar-ragas

php artisan migrate --force
php artisan route:clear
php artisan view:clear

php artisan route:cache
php artisan view:cache
