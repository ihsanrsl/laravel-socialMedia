<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts"; //biar nama tabel sama kaya db (dioverwrite)

    // protected $fillable = ['judul','isi']; //tabel2 mana aja yang boleh diisi
    protected $guarded = []; //semua table boleh diisi. kalau didalam [] ada diisi, berarti yang didalam [] gk boleh diisi

	public function author(){
		return $this->belongsTo('App\User', 'user_id'); //balikan one to many invers dari user
	}
	public function like() {
		return $this->hasMany('App\Like');
	}
	public function comment() {
		return $this->hasMany('App\Comment');
	}



}
