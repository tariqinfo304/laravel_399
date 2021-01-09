<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::share('global_data', 'Hi EVS Students');

        //it's a custom directive to use in blade 
        Blade::directive('hasseb_cream_wala', function ($p1) {

            return "Hasseb EVS : " . print_r($p1);
        });

        
    }
}
