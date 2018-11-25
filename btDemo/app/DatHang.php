<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatHang extends Model
{
	protected $table='datHang';
    protected $fillable=['idNguoiBan','idUser','idSanPham','tenUser','diaChi','soDienThoai','tenSanPham','trangThai','image'];
    public $timestamps = false;
}