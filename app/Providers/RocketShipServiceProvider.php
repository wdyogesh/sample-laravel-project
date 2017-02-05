<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class RocketShipServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */

    public function register()
    {
        $this->app
             ->bind('App\Utilities\Contracts\RocketShipContract',
                    'App\Utilities\SpaceShip');
    }


}