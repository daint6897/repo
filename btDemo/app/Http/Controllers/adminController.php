<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noiDung;
use App\SanPham;
use App\User;
class adminController extends Controller
{
    public function getSanPham(){
    	$sanPham = new SanPham();
    	$data = $sanPham->where('public','0')->get()->toArray();
    	return view('pheDuyetSanPham',['dataSanPhamPheDuyet'=>$data]);
    }
    
    public function pheDuyetSanPham($idSanPham){
    	$sanPham = new SanPham();

    	$sanPham->where('id', $idSanPham)
            ->update(['public' => 1]);


        $idNguoiBan = $sanPham->where('id',$idSanPham)->get()->toArray();
//ten san pham
        $sanPham = new SanPham();
        $tenSanPham = $sanPham->where('id',$idSanPham)->get()->toArray();
        foreach ($idNguoiBan as $value) {
        	$idNB= $value['idNguoiBan'];
        }
        foreach ($tenSanPham as $value) {
        	$tenSp= $value['tenSanPham'];
        }

        $thongBao = new noiDung();
        $data=[
        	'noiDung'=>'da phe duyet san pham '.$tenSp,
        	'idNguoiBan'=>$idNB,
        ];
        $thongBao->create($data);
        return redirect()->back();
    }

    public function xoaPheDuyet($idSanPham){
    	$sanPham = new SanPham();

    	$sanPham->where('id', $idSanPham)
            ->update(['public' => 3]);


        $idNguoiBan = $sanPham->where('id',$idSanPham)->get()->toArray();
//ten san pham
        $sanPham = new SanPham();
        $tenSanPham = $sanPham->where('id',$idSanPham)->get()->toArray();
        foreach ($idNguoiBan as $value) {
        	$idNB= $value['idNguoiBan'];
        }
        foreach ($tenSanPham as $value) {
        	$tenSp= $value['tenSanPham'];
        }

        $thongBao = new noiDung();
        $data=[
        	'noiDung'=>'san pham '.$tenSp.' khong duoc phe duyet',
        	'idNguoiBan'=>$idNB,
        ];
        $thongBao->create($data);
        return redirect()->back();
    }
//get list user
    public function getUser(){
    	$user = new User();
    	$data = $user->where('level','<','3')->get()->toArray();
    	return view('admin.quanLyUser',['dataUser'=>$data]);
    }
    public function destroy($id){
    	$user = new User();
    	$user->find($id)->destroy($id);
    	return redirect()->route('quanLyUser');
    }

//get list san pham
    public function getSanPhamad(){
    	$sanPham = new SanPham();
    	$data = $sanPham->where('public','1')->get()->toArray();
    	return view('admin.quanLySanPham',['dataSanPham'=>$data]);
    }
    public function destroySanPham($id){
    	$sanPham = new SanPham();
    	$sanPham->find($id)->destroy($id);
    	return redirect()->route('quanLySanPham');
    }
}
