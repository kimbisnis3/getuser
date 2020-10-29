<?php

namespace Edopratama\Getuser;

use Illuminate\Support\ServiceProvider;

class GetuserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edopratama\Getuser\GetuserController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
