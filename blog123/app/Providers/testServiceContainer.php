<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\demo1;
use App\Library\Services\demo2;
use App\Library\Services\demo3;
use App\Library\Services\demo2Addon;
use App\Library\Services\demo3Addon;
use App\Library\Services\demo1Vademo2;
use App\Library\Services\demo1Only;
use App\Library\Services\demoUpdate;
use App\Library\Services\demoUpdateAdapter;
use App\Library\Services\Contract\testInterface;
use App\Library\Services\Contract\testInterfaceDemo1;
use App\Library\Services\testReponsitoryListMail;
// use App\Models\Mail\testMail1;
class testServiceContainer extends ServiceProvider
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

        // $this->app->singleton('App\Library\Services\Contract\testReponsitoryInterface',function($app){
        //     return new testReponsitoryListMail(new testMail1);
        // });

        $this->app->singleton('App\Library\Services\Contract\testInterfaceDemo1',function($app){
            return new demo1();
        });
   
        $this->app->singleton('App\Library\Services\Contract\testInterfaceDemo2',function($app){
            return new demo2();
        });
        $this->app->singleton('App\Library\Services\Contract\testInterfaceDemo3',function($app){
            return new demo3();
        });
        // $this->app->singleton('App\Library\Services\Contract\testInterfaceUpdate',function($app){
        //     return  new demoUpdate();
        // });
// DEMO 1 va DEMO 2
        // $this->app->singleton('App\Library\Services\Contract\testInterface',function($app){
        //     return new demo1Vademo2(new demo1,new demo2);
        // });
   
 // DEMO 1 ONLY      
        // $this->app->singleton('App\Library\Services\Contract\testInterface',function($app){
        //     return new demo1Only(new demo1);
        // }); 
// DEMO 1 va DEMO 2 CACH 2

        // $this->app->singleton('App\Library\Services\Contract\testInterface',
        //     function($app){
        //         return new demo2Addon(new demo1Only(new demo1) , new demo2);
        //     }
        // );

// DEMO 1 , DEMO 2 va DEMO 3
        
        // $this->app->singleton('App\Library\Services\Contract\testInterface',
        //     function($app){
        //         return new demo3Addon(new demo2Addon(new demo1Only(new demo1) , new demo2), new demo3);
        //     }
        // );

// DEMO Update Adapter
        $this->app->singleton('App\Library\Services\Contract\testInterface',function($app){
            return new demoUpdateAdapter(new demo3Addon(new demo2Addon(new demo1Only(new demo1) , new demo2), new demo3),new demoUpdate);
        });

       

    }
}
