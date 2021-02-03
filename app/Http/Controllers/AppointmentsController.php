<?php

namespace App\Http\Controllers;

use  App\Appointments;
use App\Messages;
use App\patients;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
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
        $users = patients::where('doc_email', auth()->user()->email)->paginate(100);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'users' => $users,
            'new_messages' => $new_messages
   );
        return view("appointments.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        return view("appointments.create")->with('new_messages', $new_messages);

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
        
        $data = request()->validate([
            'patient' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]); 

        $patient = patients::where('pin', $request->input('patient'))->first();
        if (!empty($patient)) {

            $appointment = new Appointments;
            $appointment->patient  =  $request->input('patient');
            $appointment->date  =  $request->input('date');
            $appointment->time  =  $request->input('time');
            $appointment->doctor = auth()->user()->pin;
            //Save to db
            $appointment->save();
            $users = patients::where('doc_email', auth()->user()->email)->paginate(100);
            $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
            $data = array(
                'users' => $users,
                'new_messages' => $new_messages
       );
            return view("appointments.index", $data)->with('success', 'Appointment Booked!');
        } else {
            return redirect()->back()->with('error', 'No user with this pin, kindly check and try again!');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $appointment = Appointments::find($id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'appointment' => $appointment,
            //'hospital' => $hospital,
            'new_messages' => $new_messages
        );
        //return view("chat.create", $data);
        return view("appointments.edit", $data);

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
        
        
        $data = request()->validate([
            'patient' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]); 
            $appointment = Appointments::find($id);
            $appointment->patient  =  $request->input('patient');
            $appointment->date  =  $request->input('date');
            $appointment->time  =  $request->input('time');
            //$appointment->doctor = auth()->user()->pin;
            //Save to db
            $appointment->save();
            return redirect()->back()->with('success', 'Appointment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
      $appointment = Appointments::find($id);

              $appointment->delete();
              return redirect()->back()->with('success', 'Appointment Deleted');
    }
}
