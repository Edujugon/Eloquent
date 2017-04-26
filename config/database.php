<?php


return [

    'custom' => true,

    'default' => 'sqlite',

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => 'PATH/TO/database.sqlite',
            'prefix' => '',
        ],
        'mysql' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'port' => '3306',
            'database' => 'forge',
            'username' => 'forge',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => 'localhost',
            'port' => '5432',
            'database' => 'forge',
            'username' => 'forge',
            'password' => '',
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

    ]
];