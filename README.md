# Test - Blog Admin/Writer

### [Laravel 8](https://laravel.com/docs/8.x/) Framework
This test is also using [Laratrust](https://laratrust.santigarcor.me/), a Laravel role-based access control package.

#### Pre requisites required
1. Docker
2. Docker Compose - Version 3
3. Composer


## **Steps to set up the project**
1. Create project directory

2. Clone project with git
```bash
$ git clone git@github.com:pabloripoll/square-one.git
```

3. Check .env file has been dowloaded or create new one in root folder of the application
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

ADMIN_PATH_PREFIX=/~AdminER21
```
Admin folder is defined throught constant ADMIN_PATH_PREFIX to hide/secure admin folder from public access in production

4. Install composer packages. It wont be neccessary to perform this installation on PHP container
```bash
$ composer install
```

5. Update files and directories permission and ownership
```bash
$ sudo find . -type f -exec chmod 644 {} \;
$ sudo find . -type d -exec chmod 755 {} \;
$ sudo chown -R $USER:www-data .
$ sudo chgrp -R www-data storage bootstrap/cache
$ sudo chmod -R ug+rwx storage bootstrap/cache
```
Then, perform the following commands
```bash
$ php artisan cache:clear
$ php artisan config:clear
$ composer dump-autoload
```

6. Create and start the containers
```bash
$ make run
```

7. Generate Laravel key *this will automatically log into php container and then log out*
```bash
$ make generate-key
```

6. Get into the database container as root user
```bash
$ make ssh-db-root
```

6. 2. Create a new database if it doesn't exist
```bash
$ mysql -h localhost -u root -p -e "create database squareone default character set utf8 collate utf8_unicode_ci;"
```

7. Migrations & Seeders
Migration have to be created locally and run migrate on php container
```bash
$ make ssh-php
```
Migration updates have to be created locally and the migrate into php container
```bash
$ php artisan migrate
```
Run Laratrus seed
```bash
$ php artisan db:seed
```
Also seeders as for e.g. `php artisan make:seeder AdminUserSeeder` have to be created locally and then run into php container
```bash
$ php artisan db:seed --class=AdminUserSeeder
$ php artisan db:seed --class=WriterUserSeeder
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
