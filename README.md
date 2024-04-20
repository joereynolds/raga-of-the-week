### Running it

```
# populate the db
docker-compose run --rm php php artisan migrate:fresh --seed

# start the site
docker-compose up
```

### PHP commands

#### Artisan

```
docker-compose run --rm php php artisan
```



### Composer commands

```
docker run --rm --interactive --tty  --volume $PWD:/app composer <command>
```
