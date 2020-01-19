<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('home');
    }

    public function user_profile()
    {
        return view('profile.edit' , ['user' => Auth::user()]);
    }

    public function user_profile_edit(Request $request)
    {
        $user = User::find(Auth::id());
        $user->update($request->all());

        return redirect()->back()->with('success' , 'Zaminy zapisane pomyślnie');
    }
}
