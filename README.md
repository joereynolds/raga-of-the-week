## What is it?

Raga of the week displays a random [carnatic raga](https://en.wikipedia.org/wiki/Raga) every week.

![image](https://github.com/user-attachments/assets/7128c0d0-dd8d-4a02-8ea9-17ded6640805)


### Features

- An audio player to play the raga
- Transpose ragas to different keys
- A link through to janya (descendant ragas) ragas
- A list of ragas close in sound to the current raga
- Intervallic formulas for the ragas
- Show the western equivalent of the raga if there is one

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
