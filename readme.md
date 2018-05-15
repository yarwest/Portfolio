# Steps to get this platform working

## PHP setup

PHP dependencies are handled via Composer, install Composer using:

```sudo apt install composer```

Make sure to also install the following dependencies

```sudo apt-get install php-mbstring php-xml php-mysql```

After installing composer you can install the dependencies with the following command:

```composer install```

Make a copy of the config file:

```cp .env.example .env```

Make sure to fill the config file with things such as your database credentials

Generate the app key by running:

```php artisan key:generate```

## Database setup

Install MySQL:

```sudo apt install mysql-server```

Enter a password when prompted

Connect using root user:

```sudo mysql -u root -p```

Enter the password when asked

Create a database that corresponds with the database mentioned in the .env file:

```create database portfolio;```

Exit the MySQL client (ctrl + z)

Migrate the database and seed the population:

```php artisan migrate:refresh --seed```

## JS setup

JS dependencies are handled via the Node Package Manager (npm), install npm using:

```sudo apt install npm```

Node.js dependencies can be installed via this command:

```npm install```

Windows might require you to enable ```no-bin-links```

```npm install --no-bin-links```

In case gulp is not installed, pull it in as a global package

```sudo npm install --global gulp-cli```

## Dev

To start the local server, run

```php artisan serve```

Compiling the front-end assets

```gulp```

To keep compiling your front-end assets whenever you make a change, use

```gulp watch```

Navigating to localhost:8000 will bring you to the index of the website.

Good job.
