<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(
            'App\Repositories\RepositorySeller', 
            'App\Repositories\RepositorySale' 
        );



        /*$this->app->singleton(RepositorySeller::class, function ($app) {
            return new RepositorySeller(config('app'));
        });*/
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
