<?php

namespace App\Listeners;

use App\Events\NewProduct;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\File;
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
        sleep(10);
        $fileName = "testEven".'.txt';

        $data = 'Sản phẩm mới tạo: ' .'test event'.'234';
        File::put(public_path('/txt/' . $fileName), $data);
        return true;
    }
}
