<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Campaign;
use Route;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);  // Fix MariaDB default string length issue
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
