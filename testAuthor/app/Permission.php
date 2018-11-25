<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable=['id','title','name'];
    public function role(){
    	return $this->bolongsToMany('App\Role','role_permissions');
    }
}
