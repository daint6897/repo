<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
	protected $table = 'permisstions';
    public function roles(){
    	return $this->belongsToMany('App\Role','role_permisstion');
    }
}
