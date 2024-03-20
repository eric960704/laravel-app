1.cp .env.example .env

2.docker-compose up -d

3.docker-compose run --rm composer update

4.docker-compose run --rm artisan key:generate

5.docker-compose run --rm artisan migrate 
