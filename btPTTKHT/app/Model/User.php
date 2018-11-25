<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Model
{
    protected $table='users';
    public $timestamps = false;
     // protected $guarded = ['id'];
    protected $fillable=['id','userName','pass','level','diaChi','soDienThoai','email'];
}
