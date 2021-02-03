<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients;
use  App\Notifications;
use App\Messages;
use App\Questions;
use App\User;
use Redirect,Response;
use Calendar;
use App\Event;
use App\hospitals;
use App\Mail\SuspensionMail;
use App\Mail\ActivateMail;
use Illuminate\Support\Facades\Mail;

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
    $questions_all = Questions::orderBy('created_at', 'desc')->paginate(5);
    $data = array(
        //'calendar' => $calendar,
        'patient' => $patient,
        'patients' => $patients,
        'notice_sents' => $notice_sents,
        'notices' => $notices,
        //'hospital' => $hospital,
        'questions_all' => $questions_all,
        'new_messages' => $new_messages
    );
    if(auth()->user()->role == 'Patient'){
        return view('home_p', $data);
    }

    else{
        return view('home', $data);
    }
  
}
public function status_change()
{
    $pin = $_POST['pin'];
    $user = User::where('pin', $pin)->first();
    if ($_POST['status'] == 'Suspended') {
    
        $user->status = $_POST['status'];
        $user->save();
        
        Mail::to($user->email)->send(new SuspensionMail(auth()->user()->pin));
        return redirect('/dashboard')->with('success', 'User suspended.');
    } else {
    
        $user->status = $_POST['status'];
        $user->save();
        Mail::to($user->email)->send(new ActivateMail(auth()->user()->pin));
        return redirect('/dashboard')->with('success', 'User account activated.');
    }

}


}