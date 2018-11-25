<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
class searchController extends Controller
{
    public function getSearch(Request $request){
    	$spTim = $request->ten;

    	$sanPham = new SanPham();
    	$data = $sanPham->where(
    		[['tenSanPham','like','%'.$spTim.'%'],['public','1']]
    	)->get()->toArray();
    	// echo "<pre>";
    	// var_dump($data);
    	// echo "</pre>";
    	return view('home',['dataSp'=>$data]);
    }
}
