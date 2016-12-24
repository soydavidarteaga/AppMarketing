<?php

namespace Marketing\Http\Controllers;

use Illuminate\Http\Request;
use Marketing\Agend;
use Auth;

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
      $agends = Agend::where('user_id',Auth::user()->id)->get();
        return view('home',compact("agends"));
    }
}
