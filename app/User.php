<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany('App\Post'); 
        //one to many relation 1 user bisa buat banyak post
    }
    public function profile() {
        return $this->hasOne('App\Profile');
    }
    public function follow() {
        return $this->hasMany('App\Follow');
    }
    public function comment() {
        return $this->hasMany('App\Comment');
    }
    public function like() {
        return $this->hasMany('App\Like');
    }
}
