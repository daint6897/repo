<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thanhvien extends Model
{
    protected $table = 'thanhvien';
    protected $fillable=['id','user','pass','level'];
    public $timestamp=false;
}
