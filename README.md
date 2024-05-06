## What is it?

Raga of the week displays a random [carnatic raga](https://en.wikipedia.org/wiki/Raga) every week.

<img src="https://i.imgur.com/xuDlfAQ.png"/>

### Features

- An audio player to play the raga
- Transpose ragas to different keys
- A link through to janya (descendant ragas)
- A list of ragas close in sound to the current raga
- Intervallic formulas for the ragas
- Shows the western equivalent of the raga if there is one

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
./artisan.sh <command>
```

Or 

```
docker-compose run --rm php php artisan <command>
```

### Composer commands

```
docker run --rm --interactive --tty  --volume $PWD:/app composer <command>
```
