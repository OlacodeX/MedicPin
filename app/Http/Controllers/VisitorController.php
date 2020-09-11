<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\Visitors;
use App\User;
use App\Mail\VisitorMail;
use Illuminate\Support\Facades\Mail;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $visitors = Visitors::orderBy('created_at', 'desc')->where('patient_pin', auth()->user()->pin)->paginate(10);
        $data = array(
            'new_messages' => $new_messages,
            'visitors' => $visitors
        );
        return view('patients.visitors', $data);

    }
    public function other()
    {
        //
        $pin = $_POST['pin'];
    $p_visitors = Visitors::where('patient_pin', $pin)->paginate(10);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $visitors = Visitors::orderBy('created_at', 'desc')->where('patient_pin', auth()->user()->pin)->paginate(10);
        $data = array(
            'new_messages' => $new_messages,
            'visitors' => $visitors,
            'p_visitors' => $p_visitors
        );
        return view('patients.visitors', $data);

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
        return view("patients.add_visitor")->with('new_messages', $new_messages);
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
            'pin' => 'nullable',
            'name' => 'nullable',
            'gender' => 'nullable',
            'email' => 'nullable',
            'number' => 'nullable',
            'date' => 'nullable',
            ]); 
     
            if (!empty($_POST['pin'])) {
                $pin = $_POST['pin'];
                $detail = User::where('pin', $pin)->first();
                $visitor = new Visitors;
                $visitor->pin = $pin;
                $visitor->name = $detail->name;
                $visitor->number = $detail->p_number;
                $visitor->patient_pin = auth()->user()->pin;
                $visitor->patient_name = auth()->user()->name;
                $visitor->cc = $detail->cc;
                $visitor->email = $detail->email;
                $visitor->date = $request->input('date');
                $visitor->gender = $detail->gender;
                $visitor->save();
                Mail::to($detail->email)->send(new VisitorMail($data));
                 $basic  = new \Nexmo\Client\Credentials\Basic('b32f533c', 'nCE2sCKHMJW8Qn9w');
                $client = new \Nexmo\Client($basic);
                try {
                $message = $client->message()->send([
                    'to' => $detail->cc.$detail->p_number,
                    'from' => 'MedicPin',
                    'text' => 'Hi, This is to notify you that patient '.auth()->user()->name.' has invited you to visit them on '.$data["date"].' Please come along with a copy of this message while coming. Warm Regards, The Team at '. config('app.name').'.'
            ]);
                }
                catch (\Exception $e) {
                    return redirect()->back()->with('success', 'Visitor registered but we couldn\'t send them an sms due to an error in their phone number or delivery issue, kindly tell them to check their mailbox for the notification mail. Thanks!');
                }
            }
            else{
                $visitor = new Visitors;
                //$visitor->pin = $pin;
                $visitor->name = $request->input('name');
                $visitor->number = $request->input('number');
                $visitor->email = $request->input('email');
                $visitor->patient_pin = auth()->user()->pin;
                $visitor->patient_name = auth()->user()->name;
                $visitor->cc = $request->input('cc');
                $visitor->date = $request->input('date');
                $visitor->gender = $request->input('gender');
                $visitor->save();
                Mail::to($request->input('email'))->send(new VisitorMail($data));
                $basic  = new \Nexmo\Client\Credentials\Basic('b32f533c', 'nCE2sCKHMJW8Qn9w');
               $client = new \Nexmo\Client($basic);
               try {
               $message = $client->message()->send([
                   'to' => $request->input('cc').$request->input('number'),
                   'from' => 'MedicPin',
                   'text' => 'Hi, This is to notify you that patient '.auth()->user()->name.' has invited you to visit them on '.$data["date"].' Please come along with a copy of this message while coming. \nWarm Regards, The Team at '. '\n'.config('app.name').'.'
           ]);
               }
               catch (\Exception $e) {
                   return redirect()->back()->with('success', 'Visitor registered but we couldn\'t send them an sms due to an error in their phone number or delivery issue, kindly tell them to check their mailbox for the notification mail. Thanks!');
               }
            }
            return redirect()->back()->with('success', 'Visitor registered');
            
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
