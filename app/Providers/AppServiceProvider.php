<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('GuzzleHttp\Client', function () {
            return new Client([
                'base_uri' => 'https://api.football-data.org/v2/',
                'headers' => [
                    'X-Auth-Token' => '17a3c1e85ac24df5b7e06f2e1f53ce0a',
                    'Content-Type' => 'application/json;charset=UTF-8',
                ]
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
