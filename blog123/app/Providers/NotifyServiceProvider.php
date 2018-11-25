<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\testGuiMail\LaravelMailer;
class NotifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton('Notify', function ($app) {
        //     return new LaravelMailer();
        // });
        // $this->app->singleton('Notify', function ($app) {
        //     return new Notify();
        // });

        // $this->app->singleton('Notify');
        $this->app->singleton('App\Library\Services\Notify', function ($app) {
            return new LaravelMailer();
        });
    }
}
