<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients;
use App\Records;
use App\Consortations;
use App\Messages;

class RecordsController extends Controller
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
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        $pin = $_GET['pin'];
        $username = $_GET['username'];
        $consult = Consortations::where('patient_pin', $pin)->where('doc_pin', auth()->user()->pin)->where('created_at',now()->day);
        $record = Records::where('pin', $pin)->orderBy('created_at', 'desc')->first();
        $records = Records::where('pin', $pin)->orderBy('created_at', 'desc')->paginate(50);
        if (empty($record)) {
            return redirect('/patients')->with('error', 'No record found for user with pin '.$pin.' kindly add a new record.');//I just set the message for session(success).

        }
        else{
            $data = array(
                'username' => $username,
                'new_messages' => $new_messages,
                'records' => $records,
                'record' => $record
            );
            return view('patients.index', $data);

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
            'temprature' => 'nullable',
            'height' => 'nullable',
            'weight' => 'nullable',
            'genotype' => 'nullable',
            'fbs/rbs' => 'nullable',
            'bp' => 'nullable',
            'b_group' => 'nullable',
            ]);  
            $pin = $_POST['pin'];     
            $patientt = patients::where('pin', $pin)->first();
            $patient = new Records;
            if(!empty($request->input('temprature'))){
            $patient->temp = $request->input('temprature');
             }
             if(!empty($request->input('height'))){
             $patient->height = $request->input('height');
             }
             if(!empty($request->input('weight'))){
             $patient->weight = $request->input('weight');
             }
             if($request->input('genotype')!== 'select'){
             $patient->genotype = $request->input('genotype');
             }
             if(!empty($request->input('fbs/rbs'))){
             $patient->fbs_rbs = $request->input('fbs/rbs');
             }
             if(!empty($request->input('bp'))){
             $patient->bp = $request->input('bp');
             }
             $patient->username = $patientt->name;
             $patient->gender = $patientt->gender;
             $patient->doc_comment = $request->input('comment');
             $patient->doc_email = auth()->user()->email;
             $patient->doctor = auth()->user()->name;
             $patient->oxygen = $request->input('oxygen');
             $patient->glucose = $request->input('glucose');
             $patient->r_rate = $request->input('r_rate');
             $patient->BMI = $request->input('BMI');
             $patient->note = $request->input('note');
             $patient->prescription = $request->input('pre');
             $patient->pin = $pin;
             if($request->input('b_group') !== 'select'){
             $patient->b_group = $request->input('b_group');
             }
             //Save to db
              $patient->save();
              
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
       
        $pin = $_POST['pin'];  
       // $username = $_GET['username'];
        $consult = Consortations::where('patient_pin', $pin)->where('doc_pin', auth()->user()->pin)->where('created_at',now()->day);
        $record = Records::where('pin', $pin)->orderBy('created_at', 'desc')->first();
        $records = Records::where('pin', $pin)->orderBy('created_at', 'desc')->paginate(50);
       
            $data = array(
                //'username' => $username,
                'pin' => $pin,
                'new_messages' => $new_messages,
                'records' => $records,
                'record' => $record
            );
              return redirect()->back()->with('success', 'Great!, Record Added.');//I just set the message for session(success).
 
    }
    public function store_bio(Request $request)
    {
        //
        $this->validate($request, [
            'temprature' => 'nullable',
            'height' => 'nullable',
            'weight' => 'nullable',
            'genotype' => 'nullable',
            'fbs/rbs' => 'nullable',
            'bp' => 'nullable',
            'b_group' => 'nullable',
            ]);  
            $pin = $_POST['pin'];     
            $patientt = patients::where('pin', $pin)->first();
            $patient = Records::where('pin', $pin)->whereDay('created_at', now()->day)->first();
            if (!empty($patient)) {
                if(!empty($request->input('temprature'))){
                $patient->temp = $request->input('temprature');
                 }
                 if(!empty($request->input('height'))){
                 $patient->height = $request->input('height');
                 }
                 if(!empty($request->input('weight'))){
                 $patient->weight = $request->input('weight');
                 }
                 if($request->input('genotype')!== 'select'){
                 $patient->genotype = $request->input('genotype');
                 }
                 if(!empty($request->input('fbs/rbs'))){
                 $patient->fbs_rbs = $request->input('fbs/rbs');
                 }
                 if(!empty($request->input('bp'))){
                 $patient->bp = $request->input('bp');
                 }
                 $patient->username = $patientt->name;
                 $patient->gender = $patientt->gender;
                 $patient->doc_comment = $request->input('comment');
                 $patient->doc_email = auth()->user()->email;
                 $patient->doctor = auth()->user()->name;
                 $patient->oxygen = $request->input('oxygen');
                 $patient->glucose = $request->input('glucose');
                 $patient->r_rate = $request->input('r_rate');
                 $patient->BMI = $request->input('BMI');
                 $patient->note = $request->input('note');
                 //$patient->prescription = $request->input('pre');
                 $patient->pin = $pin;
                 if($request->input('b_group') !== 'select'){
                 $patient->b_group = $request->input('b_group');
                 }
                 //Save to db
                  $patient->save();
                
            } else {
                $patient = new Records;
                if(!empty($request->input('temprature'))){
                $patient->temp = $request->input('temprature');
                 }
                 if(!empty($request->input('height'))){
                 $patient->height = $request->input('height');
                 }
                 if(!empty($request->input('weight'))){
                 $patient->weight = $request->input('weight');
                 }
                 if($request->input('genotype')!== 'select'){
                 $patient->genotype = $request->input('genotype');
                 }
                 if(!empty($request->input('fbs/rbs'))){
                 $patient->fbs_rbs = $request->input('fbs/rbs');
                 }
                 if(!empty($request->input('bp'))){
                 $patient->bp = $request->input('bp');
                 }
                 $patient->username = $patientt->name;
                 $patient->gender = $patientt->gender;
                 $patient->doc_comment = $request->input('comment');
                 $patient->doc_email = auth()->user()->email;
                 $patient->doctor = auth()->user()->name;
                 $patient->oxygen = $request->input('oxygen');
                 $patient->glucose = $request->input('glucose');
                 $patient->r_rate = $request->input('r_rate');
                 $patient->BMI = $request->input('BMI');
                 $patient->note = $request->input('note');
                 //$patient->prescription = $request->input('pre');
                 $patient->pin = $pin;
                 if($request->input('b_group') !== 'select'){
                 $patient->b_group = $request->input('b_group');
                 }
                 //Save to db
                  $patient->save();
                
            }
              
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
       
        $pin = $_POST['pin'];  
       // $username = $_GET['username'];
        $consult = Consortations::where('patient_pin', $pin)->where('doc_pin', auth()->user()->pin)->where('created_at',now()->day);
        $record = Records::where('pin', $pin)->orderBy('created_at', 'desc')->first();
        $records = Records::where('pin', $pin)->orderBy('created_at', 'desc')->paginate(50);
       
            $data = array(
                //'username' => $username,
                'pin' => $pin,
                'new_messages' => $new_messages,
                'records' => $records,
                'record' => $record
            );
              return redirect()->back()->with('success', 'Great!, Record Added.');//I just set the message for session(success).
 
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
