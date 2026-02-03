## What is it?

Raga of the week displays a random [carnatic raga](https://en.wikipedia.org/wiki/Raga) every week.

<img width="498" height="861" alt="image" src="https://github.com/user-attachments/assets/8df98059-4761-4f23-9347-436127e9111b" />


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
