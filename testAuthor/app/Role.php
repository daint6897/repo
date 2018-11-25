<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = [
        'name', 'title'
    ];
    public function user(){
    	return $this->hasMany('App\User');
    }
    public function permission(){
    	return $this->belongsToMany('App\Permission','role_permissions');
    }
}
