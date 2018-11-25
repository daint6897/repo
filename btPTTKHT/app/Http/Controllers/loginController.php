<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class loginController extends Controller
{
    public function get(){
    	if(!Auth::check()){
			return view('userLogin');;
		}else{
			return redirect()->route('home');
		}
    }
    public function post(Request $request)
	{
		$login =[
			'userName'=>$request->userName,
			// 'pass'=>$request->pass,
		];
		// echo "<pre>";
		// var_dump($login);
		// echo "</pre>";
		if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('home');
        }else{
        	echo "cc";
        	//return redirect()->back();
        }
	}
	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('login');
	}
}
