<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class daint extends Model
{
    protected $table ='daint';
    protected $fillable=['id','hoten','sodienthoai','image'];
    public $timastamps=false;

}
