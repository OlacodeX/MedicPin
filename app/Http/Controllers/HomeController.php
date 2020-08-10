<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients;
use  App\Notifications;
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
        $notices = Notifications::where('to',auth()->user()->id)->paginate(5);
        $notice_sents = Notifications::where('from',auth()->user()->id)->paginate(5);
        $patient = patients::where('email',auth()->user()->email)->first();
        $data = array(
            'patient' => $patient,
            'notice_sents' => $notice_sents,
            'notices' => $notices
        );
        return view('home', $data);
    }
  
}
