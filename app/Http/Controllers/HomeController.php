<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Profile;
use Auth;
>>>>>>> 55f6092374795ec31a6ebdfb5fe64925040f9bbb

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        return view('home');
    }

    
=======
        $user = Profile::updateOrCreate([
            'user_id' => Auth::user()->id
        ]);

        return view('home');
    }
>>>>>>> 55f6092374795ec31a6ebdfb5fe64925040f9bbb
}
