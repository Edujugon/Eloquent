<?php

namespace Edujugon\Eloquent\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class EdujugonEloquentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $config_path = function_exists('config_path') ? config_path('customDatabase.php') : 'customDatabase.php';

        $this->publishes([
            __DIR__.'/../../config/database.php' => $config_path
        ], 'eloquent');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


}
