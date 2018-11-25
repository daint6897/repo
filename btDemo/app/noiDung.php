<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noiDung extends Model
{
    protected $table='noiDung';
    protected $fillable=['id','noiDung','idNguoiBan','idNguoiBan','idAdmin','idUser'];
    public $timestamps = false;
}
