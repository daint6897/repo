<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function post(){
        return $this->hasMany('App\User');
    }
    // public function hasPermission(Permission $permission){
    //     dd( !!optional(optional($this->role)->$permission->contains($permission)) );
    // }
    public function hasPermission(Permission $permission){
        // $user= Auth::user();
        // echo "<pre>";
        // var_dump($user->role->permission->toArray());
        // echo "</pre>";
        // die();
        return !!optional(optional($this->role)->permission)->contains($permission);
    }
    public function messages()
    {
      return $this->hasMany(Message::class);
    }
}
