<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follow extends Model
{
    protected $table = 'likePost';
    public $timestamps = true;

    protected $fillable = ['post_id', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function post() {
        return $this->belongsTo('App\Post', 'post_id');
    }
}