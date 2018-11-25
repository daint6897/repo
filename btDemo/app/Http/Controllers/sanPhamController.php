<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\User;
use App\noiDung;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class sanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanPham = new SanPham();
        $data =$sanPham->where([['idNguoiBan',Auth::user()->id],['public','1']])
        ->get()->toArray();
        return view('listSanPham',['dataSanPham'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            return view('themSanPham');
        }else{
            return redirect()->route('home');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanPham = new SanPham();
        $file = $request->image;
        $uploadPath = 'img';
        $nameImg='/img/'.$file->getClientOriginalName();
        $data=[
            'tenSanPham'=>$request->tenSanPham,
            'chiTiet'=>$request->chiTiet,
            'idNguoiBan'=>$request->idNguoiBan,
            'image'=>$nameImg,
            'soLuong'=>$request->soLuong,
            'public'=>'0',
            'gia'=>$request->gia,
        ];
        $file->move($uploadPath,$file->getClientOriginalName());
        $sanPham->create($data);

        $noiDung = new noiDung();
        $data2=[
            'noiDung'=>'san pham '.$request->tenSanPham.' dang cho phe duyet',
            'idAdmin'=>'1',
        ];
        $noiDung->create($data2);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $sanPham = new SanPham();
        $data = DB::table('sanpham')
        ->join('users', 'sanpham.idNguoiBan', '=', 'users.id')
        ->where('sanpham.id',$id)->get()
        ->toArray();
        return view('chiTietSanPham',['dataSanPhamChiTiet'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DB::table('sanpham')->find($id);
        return view('editSanPham',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sanPham = new SanPham();
        $data=[
            'tenSanPham'=>$request->tenSanPham,
            'chiTiet'=>$request->chiTiet,
            'idNguoiBan'=>$request->idNguoiBan,
            'image'=>$request->image,
            'soLuong'=>$request->soLuong,
            'public'=>'1',
            'gia'=>$request->gia,
        ];
        $sanPham->find($id)->update($data);
        return redirect()->route('sanPham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanPham = new SanPham();
        $sanPham->find($id)->destroy($id);
        return redirect()->route('sanPham.index');
    }
}
