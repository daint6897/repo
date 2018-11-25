<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table='sanpham';
    protected $fillable=['tenSanPham','chiTiet','idNguoiBan','image','soLuong','public','gia'];
    public $timestamps = false;
}
