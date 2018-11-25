<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class userController extends Controller
{
    public function get($id){
    	if(Auth::check()){
    		$User = new User();
	    	$data = $User ->where('id',$id)->get()->toArray();
	    	return view('editUser',['item'=>$data]);
    	}
    }
    public function update(Request $request,$id){
    	$data=[
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'diaChi'=>$request->diaChi,
    		'soDienThoai'=>$request->soDienThoai,
    	];
    	$User = new User();
    	$User->find($id)->update($data);
    	return redirect()->route('home');
    }
}
