# Country Capital PHP Game

Simple PHP game that takes a country name and shows its capital. Each lookup is stored in an AWS RDS database.

## Setup

1. Set RDS variables as environment variables:
   - `DB_HOST`
   - `DB_NAME`
   - `DB_USER`
   - `DB_PASS`

2. Build and run with Docker:

```sh
docker build -t php-capital-game .
docker run -d -p 8080:80 --env-file .env php-capital-game
