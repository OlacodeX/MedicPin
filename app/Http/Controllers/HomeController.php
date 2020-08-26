<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients;
use  App\Notifications;
use App\Messages;
use Redirect,Response;
use Calendar;
use App\Event;

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
        

 
        if(request()->ajax()) 

        {


        $start = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');

        $end = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');



        $dat = Event::whereDate('start_date', '>=', '2020-08-26')->whereDate('end_date',   '<=', '2020-09-27')->get(['id','title','start_date', 'end_date']);

        //return view('fullcalender');

       
        return Response::json($dat);
    } 
    $notices = Notifications::where('to',auth()->user()->id)->paginate(5);
    $notice_sents = Notifications::where('from',auth()->user()->id)->paginate(5);
    $patient = patients::where('email',auth()->user()->email)->first();
    $patients = patients::where('doc_email',auth()->user()->email)->whereNotNull('username')->paginate(10);
    $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
   
    $data = array(
        //'calendar' => $calendar,
        'patient' => $patient,
        'patients' => $patients,
        'notice_sents' => $notice_sents,
        'notices' => $notices,
        'new_messages' => $new_messages
    );
        return view('home', $data);
    }
  
}
