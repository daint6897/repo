<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\BookService;
use App\Services\BookServiceContract;
use App\Repositories\BookRepositoryContract;
use App\Repositories\BookRepository;
use App\Models\Book;
class testBookServicesProvider extends ServiceProvider
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
        // $this->app->bind('App\Services\BookServiceContract',function($app){
        //     return new BookService(new BookRepository(new Book));
        // });

        // $this->app->bind(BookService::class,function($app){
        //     return new BookService(
        //         $app->make('App\Services\BookRepositoryContract')
        //     );
        // });
    }
}
