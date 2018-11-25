<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Post;
use App\User;
use App\Policies\PostPolicy;
use App\Permission;
use Illuminate\Support\Facades\Auth;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Post::class => PostPolicy::class,
        User::class => PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // Gate::define('edit-profile',function($user){
        //     if($user->name == 'admin'){
        //         return true;
        //     }
        //     return false;
        // });

        // Gate::before(function($user){
        //     if($user->id==2){
        //         return true;
        //     }
        // });

        if(!$this->app->runningInConsole()){
            $permissions = Permission::all();
            foreach ($permissions as $permission) {
                    Gate::define($permission['name'],function($user) use($permission){
                        return $user->hasPermission($permission);
                    });
            }
        }
    }
}
