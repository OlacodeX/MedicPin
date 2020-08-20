<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients;
use  App\Notifications;
use App\Messages;
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
        $patients = patients::where('doc_email',auth()->user()->email)->paginate(10);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        $data = array(
            'patient' => $patient,
            'patients' => $patients,
            'notice_sents' => $notice_sents,
            'notices' => $notices,
            'new_messages' => $new_messages
        );
        return view('home', $data);
    }
  
}
