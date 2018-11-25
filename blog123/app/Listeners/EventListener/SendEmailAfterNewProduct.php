<?php

namespace App\Listeners\EventListener;

use App\Events\Event\NewProduct;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use File;
class SendEmailAfterNewProduct
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
     * @param  NewProduct  $event
     * @return void
     */
    public function handle(NewProduct $event)
    {
        sleep(2);
        $fileName = "Event".'.txt';

        echo "</pre>";
        $data = 'Sản phẩm mới tạo: '; 
        File::put(public_path('/txt/' . $fileName), $data);
        return true;
    }
}
