<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table ='user123';
    protected $fillable=['id','username','password','level'];
     public $timestamps = false;

}
