## What is it?

Raga of the week displays a random [carnatic raga](https://en.wikipedia.org/wiki/Raga) every week.

<img width="531" height="1309" alt="image" src="https://github.com/user-attachments/assets/d61a7f06-d5ac-42e3-9142-4797bb9ef53c" />


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
docker-compose run --rm php composer <command>
```
