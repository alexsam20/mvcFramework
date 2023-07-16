# mvcFramework
### Step 1
git clone https://github.com/alexsam20/mvcFramework.git
### Step 2
cd mvcFramework
composer update
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

