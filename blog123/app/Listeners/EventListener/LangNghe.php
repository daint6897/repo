<?php

namespace App\Listeners\EventListener;

use App\Events\Event\suKiem;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LangNghe
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
     * @param  suKiem  $event
     * @return void
     */
    public function handle(suKiem $event)
    {
        //
    }
}
