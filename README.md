# mvcFramework
### Step 1
```shell
git clone https://github.com/alexsam20/mvcFramework.git
```
### Step 2
```shell
cd mvcFramework
composer update
```
### Step 3
Rename the .env.example file to .env
### Step 4
Setup MySQL database in .env file
```dotenv
DB_USER=you_mysql_name
DB_PASSWORD=you-mysql-password
```
### Step 5
Run in console:
```shell
php migrations.php
```

### Step 6
Run in console:
```shell
cd public/
php -S localhost:8000
```
Run in browser:
```shell
http://localhost:8000
```

