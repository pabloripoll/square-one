# Square1 test exam web docker-based development environment

## **Steps to set up the project**

1. Clone project with git

```bash
git clone git@gitlab.com:erp29/erp.git
```

2. Create .env file in root folder of the application

```
APP_NAME=E3ERP
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost:8880

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=squareone
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MAIL_DRIVER=smtp
MAIL_HOST=mail
MAIL_PORT=1025
MAIL_ENCRYPTION=null

...

ADMIN_PATH_PREFIX=/~Admin57asRtNzhj#193
```
Admin folder is defined throught constant ADMIN_PATH_PREFIX

3. Create and start the containers
```bash
make run
```

4. Generate vendor files
```bash
make composer-install
```

5. Generate Laravel key
```bash
make generate-key
```

6. Get into the database container as root user
```bash
make ssh-db-root
```

6. 2. Create a new database if it doesn't exist
```bash
mysql -h localhost -u root -p -e "create database squareone default character set utf8 collate utf8_unicode_ci;"
```

7. Migrations & Seeders
Migration have to be created locally and run migrate on php container
```bash
make ssh-php
php artisan migrate
```
Also seeders `php artisan make:seeder UserSeeder` have to be created locally and then run on php container
```bash
php artisan db:seed --class=UserSeeder
```

### That's it! ;)

---

## **Apps & services**

Main application

```
http://localhost:8880
```

phpMyAdmin

```
http://localhost:8881
```

MailCatcher

```
http://localhost:1080
```

RabbitMQ Management

```
http://localhost:15672
```

---
