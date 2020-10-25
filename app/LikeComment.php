<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;

class Follow extends Model
{
    protected $table = 'likeComments';
    public $timestamps = true;

    protected $fillable = ['comment_id', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function post() {
        return $this->belongsTo('App\Comment', 'comment_id');
    }
}