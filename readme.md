# Steps to get this platform working
PHP dependencies are handled via Composer, after installing composer you can install the dependencies with the following command:

```composer install```

Make a copy of the config file:

```cp .env.example .env```

Make sure to fill the config file with things such as your database credentials

Migrate the database and seed the population:

```php artisan migrate:refresh --seed```

Node.js dependencies can be installed via this command:

```npm install```

Windows might require you to enable ```no-bin-links```

```npm install --no-bin-links```

Compiling the front-end assets

```gulp```

To keep compiling your front-end assets whenever you make a change, use

```gulp watch```

In case gulp is not installed, pull it in as a global package

```npm install --global gulp-cli```

To start the local server, run

```php artisan serve```

Navigating to localhost:8000 will bring you to the index of the website.

Good job.
