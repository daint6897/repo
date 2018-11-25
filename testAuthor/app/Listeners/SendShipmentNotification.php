<?php

namespace App\Listeners;

use App\Events\OderShipped;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendShipmentNotification
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
     * @param  OderShipped  $event
     * @return void
     */
    public function handle(OderShipped $event)
    {
        //
    }
}
