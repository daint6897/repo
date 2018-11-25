<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewProduct;
use App\Jobs\TestLog;
class testEvenController extends Controller
{
    public function get(){
    	return view('test_event');
    }
//ko co queue
    // public function store(Request $request){
    // 	$messEvent = $request->mess;

    // 	event(new NewProduct($messEvent));
    // 	echo "<pre>";
    // 	var_dump($messEvent);
    // 	echo "</pre>";
    // }

//co QUEUE
    public function store(Request $request){
    	$messEvent = $request->mess;

    	// event(new NewProduct($messEvent));

    	TestLog::dispatch();
    	echo "<pre>";
    	var_dump($messEvent);
    	echo "</pre>";
    }
}
