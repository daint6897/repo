<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest11;
use App\Models\user123;
use Illuminate\Support\Facades\Auth;
class loginController extends Controller
{
	public function getLogin()
	{
		if(!Auth::check()){
			return view('admin.login.login');
		}else{
			return redirect()->route('admin1');
		}
	}
	public function postLogin(loginRequest11 $request)
	{
		$login =[
			'username'=>$request->txtUser,
			'password'=>$request->txtPass,
			'level'=>'1',
		];
		if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect()->route('admin1');
        }else{
        	return redirect()->back();
        }
	}
	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('login');
	}
}
