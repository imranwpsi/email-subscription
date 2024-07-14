## Getting Started
- Create a fresh laravel package

```
composer create-project laravel/laravel example-app
```
- change directory to the new folder

```
cd example-app
```

- When it's done you need to configure your env file and set your app key and other necessary details. In your terminal type:

```
cp .env.example .env
```

- generate the app key

```
php artisan key:generate
```
- create a folder called `packages`, then create a new folder called hossainVendor. 
> Note that you can subtitute hossainVendor with your own vendor name. Be sure to change the refrence in every other aspect of the app

- clone this repository to the newly created folder

```
git clone https://github.com/imranwpsi/email-subscription.git packages/hossainVendor/EmailSubscription
```
- Tell Laravel how to load our package and use it's functions, so inside the root of your Laravel app in the composer.json add this code:

```

"autoload": {
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "psr-4": {
            "HossainVendor\\EmailSubscription\\": "packages/HossainVendor/EmailSubscription/src",
            "App\\": "app/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "HossainVendor\\EmailSubscription\\": "packages/HossainVendor/EmailSubscription/src",
            "Tests\\": "tests/"
        }
    },
```
- Dump the composer autoloader

```
composer dump-autoload
```

- Next, we need to add our new Service Provider in our `bootstrap/providers.php` inside the array:

```
return [
   App\Providers\AppServiceProvider::class,
   HossainVendor\EmailSubscription\SubscribeServiceProvider::class,
],
```
- Migrate the database tables

```
php artisan migrate
```

And finally, start the application by running:

```
php artisan serve
```

Visit http://localhost:8000/subscription in your browser to view the demo.

If you want to include the project as a package to your app, run:

```
composer require imranwpsi/email-subscription
```

## Built With

* [Laravel](https://laravel.com/) - The PHP framework for web artisans.
        
