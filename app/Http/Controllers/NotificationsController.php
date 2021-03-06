<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients;
use App\User;
use App\Messages;
use  App\Notifications;
use  App\hospitals;

class NotificationsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notifications::where('to',auth()->user()->id)->paginate(5);
        $notice = Notifications::where('from',auth()->user()->id)->paginate(5);
        //$hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
        $patient = patients::where('email',auth()->user()->email)->first();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        $data = array(
            'patient' => $patient,
            'notice' => $notice,
            //'hospital' => $hospital,
            'new_messages' => $new_messages,
            'notices' => $notices
        );
        return view('notifications.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        
       $patient = patients::where('doc_email',auth()->user()->email)->get();
        $notices = patients::where('doc_email',auth()->user()->email)->get();
        //$hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        //$notice = Notifications::where('from',auth()->user()->id)->paginate(5);
        $data = array(
            'patient' => $patient,
            'new_messages' => $new_messages,
            //'hospital' => $hospital,
            'notices' => $notices
        );
        return view('notifications.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'patient' => 'required',
            'content' => 'required',
        ]); 
        //Get patient details to populate necessary fields
        $patient = $request->input('patient');
       
        $notification = new Notifications;
        $user = User::where('name', $patient)->first();
        $notification->to = $user->id;//This will get the user input for title
        $notification->content = $request->input('content');
        $notification->to_name = $request->input('patient');
        $notification->from_name = auth()->user()->name;
        $notification->from_email = auth()->user()->email;
        $notification->to_email = $user->email;
        $notification->from = auth()->user()->id;
        //Save to db
        $notification->save();
        //print success message and redirect
        return redirect('/notifications')->with('success', 'Notification Sent!');//I just set the message for session(success).

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $notice = Notifications::find($id);
       // $hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'new_messages' => $new_messages,
            //'hospital' => $hospital,
            'notice' => $notice
        );
        return view('notifications.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
