<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Profile;
use App\User;
use App\Follow;
use App\Post;
use Auth;

class profileController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function set($username) {
        $store = Auth::user()->profile;
        $user = Auth::user();

        if(Auth::user()->username != $username){
            return redirect('/');
        };
        
        return view('profileSet', compact('store', 'user'));
    }

    public function author($username, Request $request){

        $request->validate([
            'display_name' => ['required','string', 'max:100', 'alpha'],
            'biography' => ['max: 255']
        ]);
        
        $user = User::where('username', $username)->first();
        $store = Profile::where('user_id', $user->id)->update([
            'name' => $request['display_name'],
            'biography' => $request['Biography'],
        ]);
        return redirect('/profile/'.$username);
    }

    public function profile($username) {
        $store = User::where('username', $username)->first();
        $profile = Profile::where('user_id', $store->id)->first();
        $following = Follow::where('user_id', $store->id);
        $checkFollowing = Follow::where('user_id', Auth::user()->id)->where('user_id_2', $store->id)->first();
        $follower = Follow::where('user_id_2', $store->id);
        $post = Post::where('user_id', $store->id)->get();

        return view('profile', compact('post','store', 'profile','following', 'follower', 'checkFollowing'));
    }

    public function follow($username, $follow) {
        $store = Auth::user()->id;
        $target = User::where('username', $username)->first();

        if($follow == 'unfollowed') {
            $unfollow = Follow::where('user_id', Auth::user()->id)->where('user_id_2', $target->id)->first()->delete();
           
        } elseif ($follow == 'followed') {
            $following = Follow::updateOrCreate([
                'user_id' => $store,
                'user_id_2' => $target->id,
            ]);
        }
        

        return redirect('/profile/'.$username);

    }
}