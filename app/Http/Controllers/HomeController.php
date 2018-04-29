<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_name = User::find(1)->ProjectPerson;
        // $project_id = User::find(1)->ProjectPerson;
        return view('home', compact('project_name'));
        // $user  = User::all();
        // $project_id = User::all();
        // return view('home', compact('project_id'));
        // $user = Auth::user();
        //echo $user->name;
        // echo Auth::user()->name;
        // return view('home')->with('curUser', $user);
    }
    // public function show(Card $card)
    // {
    //     return view('home.show', compact('project_name'));
    // }
}
