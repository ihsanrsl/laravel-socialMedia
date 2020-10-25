<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;
use App\LikeComment;

class Comment extends Model
{
    protected $table = 'comments';
    public $timestamps = true;

    protected $fillable = ['isi', 'user_id', 'post_id'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function post(){
        return $this->belongsTo('App\Post', 'post_id');
    }

    public function like() {
        return $this->belongsTo('App\LikeComment', 'likes_comment');
    }
}