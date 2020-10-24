<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Profile;
use App\User;
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
        ]);
        
        $user = User::where('username', $username)->first();
        $store = Profile::where('user_id', $user->id)->update([
            'name' => $request['display_name'],
            'biography' => $request['biography'],
        ]);
        return redirect('/profile/'.$username);
    }

    public function profile($username) {
        $store = User::where('username', $username)->first();
        $profile = Profile::where('user_id', $store->id)->first();
        return view('profile', compact('store', 'profile'));
    }
}