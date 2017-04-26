#   Eloquent Stand-Alone Package for Laravel

## Installation

### Laravel

Update your composer.json file.

```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/Edujugon/Eloquent"
        }
    ],
    "require": {
        "edujugon/eloquent": "dev-master"
    },
```

Then

```
composer update
```

## Register the Eloquent service by adding it to the providers array.

```
'providers' => array(
  ...
  Edujugon\Eloquent\Providers\EdujugonEloquentServiceProvider::class,
)
```

## Publish the package's configuration file to the application's own config directory
  
```
php artisan vendor:publish --provider="Edujugon\Eloquent\Providers\EdujugonEloquentServiceProvider" --tag="eloquent"
```       
       
 