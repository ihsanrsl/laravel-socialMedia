<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Comment;
use App\Like;
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
		$request->validate([
			'post-input' => 'required',
			'images' => 'image|mimes:jpeg,png,svg|max:2048'
		]);

		// menyimpan data dengan metode mass assignment. cek di file post.php juga protected $guarded
		if ($request->has('images')) {
			$images = $request->images;
			$new_images = time().$images->getClientOriginalName();

			$post = Post::create([
				"isi" => $request["post-input"],
				"images" => 'public/uploads/posts/'.$new_images,
				"slug" => Str::slug($request["post-input"]),
				"user_id" => Auth::id()
			]);
			$images->move('public/uploads/posts/', $new_images);
		}
		else{
			$post = Post::create([
				"isi" => $request["post-input"],
				"slug" => Str::slug($request["post-input"]),
				"user_id" => Auth::id()
			]);
		}

		//menyimpan nama user yang buat post
		$user = Auth::user();
		$user->posts()->save($post);
		
		Alert::success('Success', 'Post successfully create.');
		return redirect('/');
	}

	public function detailPost($id) {
		$posts = Post::find($id);
		$comment = Comment::where('post_id', $id)->get();
		$checkLike = Like::where('user_id', Auth::user()->id)->where('post_id', $id)->first();
		$likes = Like::where('post_id', $id);

		return view('detailedPost', compact('posts', 'comment', 'checkLike', 'likes'));
	}
	public function edit($id) {
		$posts = Post::find($id);

        return view('editPost', compact('posts'));
	}

	public function update($id, Request $request) {
		$request->validate([
			'edit_post' => 'required',
		]);

		$update = Post::where('id', $id)->update([
			'isi' => $request['edit_post']
		]);

		return redirect('/post/'.$id);
	}

	public function deletePost($id) {
		Post::destroy($id);

		return redirect('/');
	}

	public function comment($id) {
		$post = Post::find($id);

		return view('commentPost',compact('post'));
	}

	public function comments($id) {
		$posts = Post::find($id);

		return view('homescreen');
	}
	public function makeComment($id, Request $request) {
		$request->validate([
			'comment-post' => 'required'
		]);

		$post = Comment::create([
			'user_id' => Auth::user()->id,
			'post_id' => $id,
			'isi' => $request['comment-post'],
		]);

		return redirect('/post/'.$id);
	}

	public function like($id, $likes) {
        $store = Auth::user()->id;

        if($likes == 'unlike') {
            $unliking = Like::where('user_id', Auth::user()->id)->where('post_id', $id)->first()->delete();
           
        } elseif ($likes == 'like') {
            $liking = Like::updateOrCreate([
                'user_id' => $store,
                'post_id' => $id,
            ]);
        }
        

        return redirect('/post/'.$id);

    }

	public function index(){

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
