<?php

namespace jlaucho\conection_ubiquiti;

use Illuminate\Support\ServiceProvider;

class ConectionUbiquitiProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/ConectionUbiquiti.php' => config_path('ConectionUbiquiti.php'),
            __DIR__ . '/InformationRadio.php' => base_path(config_path('ConectionUbiquiti.direction_model').'/InformationRadio.php'),
            __DIR__ . '/database/migrations/' => database_path('migrations')],
            'migrations');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/2019_01_18_180028_informatio_radios.php');
        $this->mergeConfigFrom(
            __DIR__.'/config/ConectionUbiquiti.php', 'ConectionUbiquiti'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}