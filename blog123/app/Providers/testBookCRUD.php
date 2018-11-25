<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Book;
use App\Repositories\BookRepositoryContract;
use App\Repositories\BookRepository;
use App\Services\BookService;
use App\Services\BookServiceContract;
class testBookCRUD extends ServiceProvider
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

        // $this->app->singleton('App\Repositories\BookRepositoryContract',function($app){
        //     return new BookRepository(new Book);
        // });

        $this->app->singleton('App\Services\BookServiceContract',function($app){
            // $bookRepo = new BookRepository(new Book);
            return new BookService(new BookRepository(new Book));
        });

        // $this->app->bind(BookRepository::class,BookService::class);

        // $this->app->singleton('App\Repositories\BookRepositoryContract',function($app){
            
        //     return new BookRepository(new Book);
        // });



        
        // singleton

        // $this->app->bind('App\Repositories\BookRepositoryContract', BookRepository::class);

        // $this->app->bind(BookServiceContract::class, BookService::class);
    }
}
