<?php

namespace App\Http\Controllers\testReponsitory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mail\testMail1;

class koDungReponsitory extends Controller
{
    public function TestController(){
    	$user = testMail1::get();
    	foreach ($user as $value) {
    		echo $value->email;
    		echo '<br>';
    	}
    }
}
