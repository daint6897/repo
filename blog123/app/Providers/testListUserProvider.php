<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\testReponsitoryListMail;
// use App\Http\Controllers\testReponsitory\DungReponsitory;
use App\Models\Mail\testMail1;
class testListUserProvider extends ServiceProvider
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
        $this->app->singleton('App\Library\Services\Contract\testReponsitoryInterface',function($app){
            return new testReponsitoryListMail(new testMail1);
        });
    }
}
