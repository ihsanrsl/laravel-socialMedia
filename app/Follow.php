<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follow extends Model
{
    protected $table = 'follows';
    public $timestamps = true;

    protected $fillable = ['user_id_2', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}