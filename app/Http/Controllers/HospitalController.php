<?php

namespace App\Http\Controllers;

use App\hospitals;
use App\User;
use App\HospitalDoctors;
use App\Messages;
use App\Mail\MessageNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HospitalController extends Controller
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
        //
        if (auth()->user()->role == 'Doctor') {
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $hospitals = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->get();
        $data = array(
            'new_messages' => $new_messages,
            'hospitals' => $hospitals
        );
        return view('hospitals.index', $data);
     
    }
    else{
        return view('pages-error');
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (auth()->user()->role == 'Doctor') {
        $messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        return view("hospitals.create")->with('messages', $messages);
        
    }
    else{
        return view('pages-error');
    }
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
        if (auth()->user()->role == 'Doctor') {
        $this->validate($request, [
            'h_name' => 'required',
            'h_email' => 'required',
            'h_number' => 'required',
            'h_type' => 'required',
            'h_add' => 'required',
             ]);
             $hospital = new hospitals;
             $hospital->h_name = $request->input('h_name');
             $hospital->h_email = $request->input('h_email');
             $hospital->h_add = $request->input('h_add');
             $hospital->h_type = $request->input('h_type');
             $hospital->h_number = $request->input('h_number');
             $hospital->user_pin = auth()->user()->pin;
             $hospital->user_name = auth()->user()->name;
             $hospital->user_id = auth()->user()->id;
            $hospital->save();
            
              
            return redirect('/hospitals')->with('success', 'Great!, hospital created.');//I just set the message for session(success).
     
        }
        else{
            return view('pages-error');
        }
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
    }
    public function add_doc()
    {
        //
        if (auth()->user()->role == 'Doctor') {
        $id = $_POST['id'];
        $messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $hospital = hospitals::orderBy('created_at', 'desc')->where('id', $id)->first();
        $data = array(
            'messages' => $messages,
            'hospital' => $hospital
        );
        return view('hospitals.add_doc', $data);
     
    }
    else{
        return view('pages-error');
    }
    }
    public function doctors()
    {
        //
        if (auth()->user()->role == 'Doctor') {
        $id = $_POST['id'];
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $doctors = HospitalDoctors::orderBy('created_at', 'desc')->where('h_id', $id)->get();
        $data = array(
            'new_messages' => $new_messages,
            'doctors' => $doctors
        );
        return view('hospitals.list', $data);
     
    }
    else{
        return view('pages-error');
    }
    }
    public function search()
    {
        //
        $pin = $_POST['pin'];
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        
        $doctor = HospitalDoctors::orderBy('created_at', 'desc')->where('doctor_pin', $pin)->first();
        if (empty($doctor)) {
            return redirect('/hospitals')->with('error', 'oops, no doctor with this record in your hospital.');
        }
        else{
        $data = array(
            'new_messages' => $new_messages,
            'doctor' => $doctor
        );
        return view('hospitals.search_result', $data);
    }
    }
    public function store_doc(Request $request)
    {
        //
        if (auth()->user()->role == 'Doctor') {
        $this->validate($request, [
            'pin' => 'required',
             ]);
            $doctor = User::where('pin', $request->input('pin'))->first();
            if (empty($doctor)) {
                return redirect('/hospitals')->with('error', 'oops, no doctor with this pin in our record, please check and try again.');
            }
            else{
             $hospital = new HospitalDoctors;
             $hospital->h_name = $request->input('h_name');
             $hospital->h_id = $request->input('h_id');
             $hospital->doctor_pin = $doctor->pin;
             $hospital->doctor_name = $doctor->name;
             //$hospital->h_number = $request->input('h_number');
             //$hospital->user_pin = auth()->user()->pin;
             $hospital->addedby_pin = auth()->user()->pin;
             $hospital->added_by = auth()->user()->id;
            $hospital->save();
            
              $doctor->h_id = $request->input('h_id');
              $doctor->h_name = $request->input('h_name');
              $doctor->save();
            return redirect('/hospitals')->with('success', 'Great!, doctor added.');//I just set the message for session(success).
            }
                 
    }
    else{
        return view('pages-error');
    }
    }

    /**
     * Show the form for creating a new resource.
     *@param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function message()
    {
        //
        $pin = $_GET['pin'];
        $doctor = User::where('pin', $pin)->first();
        $messages = Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->orderBy('created_at', 'desc')->get();
        $data = array(
            'doctor' => $doctor,
            'messages' => $messages
        );
        return view("hospitals.message", $data);
    }

    public function store_message(Request $request)
    {
        //
        $data = request()->validate([
            'receiver_name' => 'required|nullable',
            'receiver_email' => 'required',
            'message' => 'required',
            //'sender' => auth()->user()->u_name,
        ]);
                 
       $message = new Messages;
       $message->receiver_id = $request->input('receiver_id');
       $message->receiver_name = $request->input('receiver_name');
       $message->receiver_pin = $request->input('receiver_pin');
       $message->sender_id = auth()->user()->id;
       $message->sender_email = auth()->user()->email;
       
       $message->message_id = $request->input('message_id');
       $message->sender_name = auth()->user()->name;
       $message->message = $request->input('message');
        //$comment->topic_id = $request->input('topic_id');
        //Save to db
     $message->save();
     
    Mail::to($request->input('receiver_email'))->send(new MessageNotification($data));
     return redirect()->back()->with('success', 'Message sent');
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
        $hospital = hospitals::find($id);
        $messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       $data = array(
                'hospital' => $hospital,
                'messages' => $messages
       );

        return view('hospitals.edit', $data);
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

        $this->validate($request, [
            'h_name' => 'required',
            'h_email' => 'required',
            'h_number' => 'required',
            'h_type' => 'required',
            'h_add' => 'required',
             ]);
             $hospital = hospitals::find($id);
             $hospital->h_name = $request->input('h_name');
             $hospital->h_email = $request->input('h_email');
             $hospital->h_add = $request->input('h_add');
             $hospital->h_type = $request->input('h_type');
             $hospital->h_number = $request->input('h_number');
            $hospital->save();
            
              
            return redirect('/hospitals')->with('success', 'Great!, hospital details updated.');//I just set the message for session(success).

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
        $pin = $_POST['pin'];
        $user_update = User::where('pin', $pin)->first();
        $user_update->h_id = NULL;
        $user_update->h_name = NULL;
        $user_update->save();
        $doctor = HospitalDoctors::find($id);
       $doctor->delete();
        return redirect('/hospitals')->with('success', 'Doctor Removed from your hospital.');
        
    }
    
    public function destroyy()
    {
        //
        $id = $_POST['id'];
        $hospital = hospitals::find($id);
       $hospital->delete();
        return redirect('/dashboard')->with('success', 'Hospital removed from our database.');
        
    }
}
