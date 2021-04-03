<?php

namespace App\Providers;

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
        view()->composer('sections.partners', function($view){
            $partners=\App\Models\Partner::all();
            $view->with(compact('partners'));
        });

        view()->composer('layouts.index', function($view){
            $link=\App\Models\Link::withTranslation(\App::getLocale())->first();
            $view->with(compact('link'));
        });
    }
}
