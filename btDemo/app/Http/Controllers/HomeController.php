<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->level ==3){
            return redirect()->route('adminPheDuyet');;
        }
        if(Auth::user()->level ==2){
            return redirect()->route('sanPham.index');;
        }
        if(Auth::user()->level ==1){
            return view('home');
        }
    }
}
