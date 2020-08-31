<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        //* All these function send the data to the specific view with out any route;
        view()->composer('frontend.Landing', function ($view) {
            $view->with('SliderImages',  DB::table('image_sliders')->get());

        });
    }
}
