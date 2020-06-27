<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Model\AddChange;

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
        View::composer('frontend.home.home', function ($view) 
        {
            $view->with('changesMoneyAccounts', AddChange::where( 'publication_status', 1 )->get());
        });
    }
}
