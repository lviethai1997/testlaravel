<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\assets;
use View;

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
        $assets = Assets::first();
        View::share('assets',$assets);
    }
}
