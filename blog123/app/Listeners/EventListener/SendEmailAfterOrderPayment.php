<?php

namespace App\Listeners\EventListener;

use App\Events\Event\OrderPayment;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailAfterOrderPayment
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderPayment  $event
     * @return void
     */
    public function handle(OrderPayment $event)
    {
        //
    }
}
