<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    protected $table = 'profiles';
    public $timestamps = true;

    protected $fillable = ['name', 'user_id', 'biography'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}