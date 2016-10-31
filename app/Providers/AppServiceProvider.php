<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        if ($app->environment() !== 'production') {
            $app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
            $app->register(\GrahamCampbell\Exceptions\ExceptionsServiceProvider::class);
            $app->register(\Barryvdh\Debugbar\ServiceProvider::class);
            $app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
