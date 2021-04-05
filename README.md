# TV Series API with Lumen :zap:

## Install dependencies:

```
$ composer install
```

## Set database values on `.env` and run the migrations with seeds:

```
$ php artisan migrate --seed
```

## Create user to auth on API:
```
$ php artisan create:user
```

## Run the server: 
```
$ php -S localhost:8000 -t public
```

## Auth on the route with your created user:

```
/api/auth
```

## Available routes:

Series:
```
 GET api/series => All series
 GET api/series/{id} => return the id series
 GET api/series/{id}/episodes  => return all episodes from series id
 POST api/series => create series
 DELETE api/series/id => delete series resource
```
Episodes
```
 GET api/episdes => All episodes
 GET api/episodes/{id} => return the episodes id
 POST api/episodes => create episodes from series
 DELETE api/episodes/id => delete episodes resource
```