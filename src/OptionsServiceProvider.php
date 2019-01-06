<?php

namespace Crivion\Options;

use Illuminate\Support\ServiceProvider;

class OptionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // load `options_table`  migration
        $this->loadMigrationsFrom(__DIR__.'/migrations');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       // register alias
        $this->app->alias(Options::class, 'options');   
    }
}
