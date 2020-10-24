<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Post;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class PostController extends Controller
{
	public function __construct(){
		$this->middleware('auth'); //semua halaman
		// $this->middleware('auth')->except(['index','show']); //semua halaman kecuali index dan show
	}

	public function create(){
		return view('post.create');
	}

	public function store(Request $request){
	// dd($request->all());
		$request->validate([
			'post-input' => 'required',
			'images' => 'image|mimes:jpeg,png,svg|max:2048'
		]);

		$images = $request->images;
		$new_images = time().$images->getClientOriginalName();


		// menyimpan data dengan metode mass assignment. cek di file post.php juga protected $guarded

		$post = Post::create([
			"isi" => $request["post-input"],
			"images" => 'public/uploads/posts/'.$new_images,
			"slug" => Str::slug($request["post-input"]),
			// "profil_id" => Auth::user()->profil->id
			"user_id" => Auth::id()
		]);

		$images->move('public/uploads/posts/', $new_images);

		//menyimpan nama user yang buat post
		$user = Auth::user();
		$user->posts()->save($post);
		
		Alert::success('Success', 'Postingan Berhasil Disimpan');
		return redirect('/');
	}

	public function index(){
		//$pertanyaan = DB::table('pertanyaan')->get(); //select*from pertanyaan;
		// dd($pertanyaan);
		$post = Post::all(); // menampilkan semua data dengan metode model ORM

		//menampilan data yang dibuat oleh user itu aja
		// $profil_id = Auth::user()->profil->id;
		// $user = Auth::user();
		// dd ($profil);
		// $pertanyaan = $user->pertanyaans;
		// dd ($pertanyaan);
		return view('homescreen', compact('post'));
	}

	public function index_comment(){
		//$pertanyaan = DB::table('pertanyaan')->get(); //select*from pertanyaan;
		// dd($pertanyaan);
		$post = Post::all(); // menampilkan semua data dengan metode model ORM

		//menampilan data yang dibuat oleh user itu aja
		// $profil_id = Auth::user()->profil->id;
		// $user = Auth::user();
		// dd ($profil);
		// $pertanyaan = $user->pertanyaans;
		// dd ($pertanyaan);
		return view('detailedPost', compact('post'));
	}

}
