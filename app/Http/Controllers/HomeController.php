<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients;
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
        $patient = patients::where('email',auth()->user()->email)->first();
        return view('home')->with('patient', $patient);
    }
  
}
