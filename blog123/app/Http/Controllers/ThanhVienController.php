<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThanhVienRequest;
use App\Models\Thanhvien;
use Hash;
class ThanhVienController extends Controller
{
    public function getLogin()
    {
    	// echo 'ahih';
    	return view('Login.index');
    }
    public function postLogin(ThanhVienRequest $request)
    {

    	$data = new Thanhvien;
    	$data->user = $request->user;
    	$data->pass = Hash::make($request->pass) ;
    	$data->level=$request->level;
    	$data->save();
    	
    }

}
