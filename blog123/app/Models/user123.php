<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class user123 extends Model
{
    protected $table='user123';
    protected $fillable=['id','username','password','level'];
    public $timastamps=false;
}
