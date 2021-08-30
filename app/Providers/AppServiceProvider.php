<?php

namespace App\Providers;

use App\About;
use App\Branch;
use App\Brand;
use App\HomeSetting;
use App\News;
use App\Social;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using closure based composers...
        view()->composer('@public._layouts.master', function ($view) {
            $socials = Social::all();
            $view->with('socials', $socials);
        });
    }
}
