<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

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
        //$sliders = DB::table('slider')->get();
        //return view('home')->with('slider',$sliders);
        $sliders = Slider::all();
        return view('home', compact('sliders')); 
    }
    
    
}
