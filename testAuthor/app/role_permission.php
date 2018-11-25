<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_permission extends Model
{
    protected $fillable=['role_id','permission_id'];
}
