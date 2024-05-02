## What is it?

Raga of the week displays a random [carnatic raga](https://en.wikipedia.org/wiki/Raga) every week.

<img src="https://i.imgur.com/xuDlfAQ.png"/>
Included in this is a breakdown of the svaras and some useful equivalent things for westerners who don't know this kind of thing.

### Running it

```
# Run this to seed and link records
./setup.sh

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
