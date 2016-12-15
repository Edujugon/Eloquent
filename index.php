<?php


if(!function_exists('config_path'))
    require __DIR__.'/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

//Database
$database = function_exists('config_path') && file_exists(config_path('customDatabase.php')) ? require config_path('customDatabase.php') : require 'config/database.php';

$databaseConfig = $database['connections'][$database['default']];

$defaultDBdriver = (function_exists('env') && env('DB_CONNECTION')) ? env('DB_CONNECTION') : 'pgsql';

//Get Laravel Project's config or use its own configuration.
if(!$database['custom']){
    $databaseConfig = function_exists('config_path') ? $database['connections'][$defaultDBdriver] : $databaseConfig;
}



//Capsule
$capsule = new Capsule;

$capsule->addConnection(array(
    'driver' => $databaseConfig['driver'],
    'host' => $databaseConfig['host'],
    'port' => $databaseConfig['port'],
    'database' => $databaseConfig['database'],
    'username' => $databaseConfig['username'],
    'password' => $databaseConfig['password'],
    'charset' => $databaseConfig['charset'],
    'prefix' => $databaseConfig['prefix'],
    'schema' => $databaseConfig['schema'],
    'sslmode' => $databaseConfig['sslmode'],
));


// Setup the Eloquent ORM
$capsule->bootEloquent();