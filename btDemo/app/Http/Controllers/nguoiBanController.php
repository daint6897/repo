<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatHang;
use App\noiDung;
class nguoiBanController extends Controller
{
    public function getSanPham(){
    	$sanPham = new DatHang();
    	$data = $sanPham->where('trangThai','0')->get()->toArray();
    	return view('nguoiBanPheDuyet',['dataSanPhamPheDuyet'=>$data]);
    }
    public function pheDuyetSanPham($idSanPham){
    	$donHang = new DatHang();
//dang giao hang
    	$donHang->where('idSanPham', $idSanPham)
            ->update(['trangThai' => 1]);


        $dataDonHang = $donHang->where('idSanPham',$idSanPham)->get()->toArray();
        // $tenSanPham = $sanPham->where('id',$idSanPham)->get()->toArray();
        foreach ($dataDonHang as $value) {
        	$idUser= $value['idUser'];
        	$tenSp=$value['tenSanPham'];
        }

        $thongBao = new noiDung();
        $data=[
        	'noiDung'=>'dang giao hang '.$tenSp,
        	'idUser'=>$idUser,
        ];
        $thongBao->create($data);
        return redirect()->back();
    }
    public function xoaPheDuyet($idSanPham){
    	$donHang = new DatHang();
//dang giao hang
    	$donHang->where('idSanPham', $idSanPham)
            ->update(['trangThai' => 3]);


        $dataDonHang = $donHang->where('idSanPham',$idSanPham)->get()->toArray();
        // $tenSanPham = $sanPham->where('id',$idSanPham)->get()->toArray();
        foreach ($dataDonHang as $value) {
        	$idUser= $value['idUser'];
        	$tenSp=$value['tenSanPham'];
        }

        $thongBao = new noiDung();
        $data=[
        	'noiDung'=>'San pham '.$tenSp .' khong duoc giao',
        	'idUser'=>$idUser,
        ];
        $thongBao->create($data);
        return redirect()->back();
    }
}
