
## Installation

To install Wave, you'll want to clone or download this repo:

```
git clone https://github.com/thedevdojo/wave.git project_name
```

Next, we can install Wave with these **4 simple steps**:

### 1. Create a New Database Named "wave"

We'll need to utilize a MySQL database during the installation. For the following stage, you'll need to create a new database and preserve the credentials.

### 2. Rename the `.env.example` file to '.env'

We need to specify our Environment variables for our application. You will see a file named `.env.example`, you will need to duplicate that file and rename it to `.env`.

Then, open up the `.env` file and update your *DB_DATABASE*, *DB_USERNAME*, and *DB_PASSWORD* in the appropriate fields. You will also want to update the *APP_URL* to the URL of your application.

```bash
APP_URL=http://wave.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wave
DB_USERNAME=root
DB_PASSWORD=
```


### 3. Add Composer Dependencies

Following that, we'll need to install all composer dependencies through the following command:
```php
composer update 
```
### 4. Run Migrations and Seeds

We must migrate our database schema into our database, which we can accomplish by running the following command:
```php
php artisan migrate
```
<br>
Finally, we will need to seed our database with the following command:

```php
php artisan db:seed
```
<br>

🎉 And that's it! You will now be able to visit your URL and see your Wave application up and running.


## Watch, Learn, and Build

We've also got a full video series on how you can setup, build, and configure Wave. 🍿 You can watch first few videos for free, and additional videos will require a [DevDojo Pro](https://devdojo.com/pro) subscription. By subscribing to a [DevDojo Pro](https://devdojo.com/pro) subscription you will also be supporting the ongoing development of this project. It's a win win! 🙌

[Click here to watch the Wave Video Series](https://devdojo.com/course/wave).


## Documentation

Checkout the [official documentation here](https://wave.devdojo.com/docs).
