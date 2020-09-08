<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\patients;
use App\Consortations;
use App\HospitalDoctors;
use App\pharmacy;
use App\User;
use App\Messages;
use App\sessions;
class ConsortationsController extends Controller
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
        $pin = $_GET['pin'];
        $consortations = Consortations::where('patient_pin', $pin)->paginate(10);
       $patient = patients::where('pin', $pin)->first();
      // $doctors = User::where('role', 'doctor')->get();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        $data = array(
            'patient' => $patient,
            'consortations' => $consortations,
            'new_messages' => $new_messages
            //'doctors' => $doctors
        );
        return view('consortations.index', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pin = $_GET['pin'];
        $consortations = Consortations::where('patient_pin', $pin)->paginate(10);
        $patient = patients::where('pin', $pin)->first();
       $doctors = User::where('role', 'doctor')->get();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        $data = array(
            'patient' => $patient,
            'consortations' => $consortations,
            'new_messages' => $new_messages,
            'doctors' => $doctors
        );
        return view('consortations.create', $data);

    }

    public function diag(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|array|min:1',
            ]);  
               
            $test = new Labs;    
            $patientt = patients::where('pin', $request->input('p_pin'))->first();
            $test->test_name1 = $request->input('name');
            $test->patient_name = $patientt->name;
            $test->patient_pin = $request->input('p_pin');
            $test->doc_name = auth()->user()->name;
            $test->doc_pin = auth()->user()->pin;
            $test->save();
            return redirect('./')->with('success', 'Great!, Patient can now proceed to the lab to carry out test.');
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
            'office' => 'nullable',
            'doc' => 'required',
        ]); 

        $patient = patients::where('pin', $request->input('patient_pin'))->first();
        ///$doc = User::where('pin', $request->input('doc_pin'))->first();
            $appointment = new Consortations;
            $appointment->patient_pin  =  $request->input('patient_pin');
            $appointment->patient_name  =  $patient->name;
            $appointment->doc_name  =  $request->input('doc');
            $appointment->doc_pin  =  $request->input('doc_pin');
            $appointment->office  =  $request->input('office');
            $appointment->scheduledBy_pin = auth()->user()->pin;
            $appointment->scheduled_by = auth()->user()->name;
            //Save to db
            $appointment->save();
            return redirect()->back()->with('success', 'Great!, patient can proceed now to see doctor.');

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
