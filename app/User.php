<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];
    
    protected $table = 'users';
    protected $primaryKey = 'users_id';
   // public $timestamps = false;
    
    
    protected $fillable = ['first_name', 'last_name', 'gender', 'phone', 'email', 'password'];
   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
