# docker run --rm --interactive --tty  --volume $PWD:/app composer install
docker-compose run --rm php php artisan migrate:fresh --seed
docker-compose run --rm php php artisan app:find-similar-ragas
docker-compose run --rm php php artisan app:link-ragas-to-western-scales
