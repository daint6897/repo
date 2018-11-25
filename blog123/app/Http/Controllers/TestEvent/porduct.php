<?php

namespace App\Http\Controllers\TestEvent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Event;
use App\Events\Event\NewProduct;
use App\Models\admin\userModel;
class porduct extends Controller
{
    public function addProduct(Request $request)
    {
    	return view('testEvent.addProduct');	
    }
    public function addProductPost(Request $request)
    {
    	echo $request->tenSanPham;
    	$mess = userModel::find('2')->toArray();
    	
    	event(new NewProduct());
    		
    }
}
