<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        'App\Events\Event\OrderPayment' => [
            'App\Listeners\EventListener\SendEmailAfterOrderPayment',
        ],
        'App\Events\Event\suKiem' => [
            'App\Listeners\EventListener\LangNghe',
        ],
        'App\Events\Event\NewProduct' => [
            'App\Listeners\EventListener\SendEmailAfterNewProduct',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
