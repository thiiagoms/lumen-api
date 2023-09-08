<div align="center">
  <a href="https://github.com/thiiagoms/lumen-api">
      <img src="./.assets/img/series.png" alt="Logo" width="80" height="80">
  </a>
  <h3>Simple API with Lumen Framework </h3>
  <p float="left">
    <img
      src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white"
      alt="Laravel"
    >
    <img
      src="https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white"
      alt="MySQL"
    >
    <img
      src="https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white"
      alt="Docker"
    >
  </p>
</div>

- [Dependencies :heavy_plus_sign:](#dependencies)
- [Install :package:](#install)

## Dependencies
- Docker :whale:

## Install

01 -) Clone:
```bash
$ git clone https://github.com/thiiagoms/lumen-api
```

02 -) Go to application directory:
```bash
$ cd lumen-api
lumen-api $
```

03 -) Set up application containers:
```bash
lumen-api $ docker-compose up -d
```

04 -) Install dependencies:
```bash
lumen-api $ docker-compose exec app composer install
```

05 -) Copy `.env.example` to `.env` and generate migrations:
```bash
lumen-api $ docker-compose exec app cp .env.example .env
lumen-api $ docker-compose exec app php artisan migrate
```


