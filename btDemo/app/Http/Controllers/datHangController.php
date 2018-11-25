<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SanPham;
use App\DatHang;
use App\noiDung;
class datHangController extends Controller
{
    public function muaHang($id){
    	$user = Auth::user();
    	$sanPham = new SanPham();
    	$datHang = new DatHang();
    	$dataSanPham = $sanPham->where('id',$id)->get()->toArray();
    	foreach ($dataSanPham as $value) {
    		$tenSanPham = $value['tenSanPham'];
    		$idNguoiBan = $value['idNguoiBan'];
    		$image=$value['image'];
    	}
    	$data =[
    		'idNguoiBan'=>$idNguoiBan,
    		'idUser' => $user->id,
    		'diaChi' => $user->diaChi,
    		'soDienThoai' => $user->soDienThoai,
    		'idSanPham'=>$id,
    		'tenUser'=>$user->name,
    		'tenSanPham'=>$tenSanPham,
    		'trangThai'=>'0',
    		'image'=>$image,
    	];
    	$datHang->create($data);
//thong bao
    	$noiDung = new noiDung();
        $data2=[
            'noiDung'=>'co 1 don hang noi '.$user->name.' mua '.$tenSanPham,
            'idNguoiBan'=>$idNguoiBan,
        ];
        $data3=[
            'noiDung'=>'san pham '.$tenSanPham.' dat hang thanh cong',
            'idUser'=>$user->id,
        ];
        $noiDung->create($data2);
        $noiDung->create($data3);
    	return redirect()->route('home');
    }
}
