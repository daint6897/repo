<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable=['id','monhoc','giatien','giangvien'];
    public $timestamps = false;
    public function images()
    {
    	return $this->hasMany('App\images');
    }
}
