<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts"; //biar nama tabel sama kaya db (dioverwrite)

    // protected $fillable = ['judul','isi']; //tabel2 mana aja yang boleh diisi
    protected $guarded = []; //semua table boleh diisi. kalau didalam [] ada diisi, berarti yang didalam [] gk boleh diisi


	public function best(){
		return $this->belongsTo('App\Jawaban'); //balikan one to one dari jawaban
	}

	public function author(){
		return $this->belongsTo('App\Profil', 'profil_id'); //balikan one to many invers dari user
	}



}
