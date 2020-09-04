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
            'h_rate' => 'nullable',
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
             if(!empty($request->input('h_rate'))){
             $patient->h_rate = $request->input('h_rate');
             }
             if(!empty($request->input('bp'))){
             $patient->bp = $request->input('bp');
             }
             $patient->username = $patientt->name;
             $patient->gender = $patientt->gender;
             $patient->sickness1 = $request->input('sickness1');
             $patient->sickness2 = $request->input('sickness2');
             $patient->sickness3 = $request->input('sickness3');
             $patient->sickness4 = $request->input('sickness4');
             $patient->sickness5 = $request->input('sickness5');
             $patient->sickness6 = $request->input('sickness6');
             $patient->dosage1 = $request->input('dosage1');
             $patient->dosage2 = $request->input('dosage2');
             $patient->dosage3 = $request->input('dosage3');
             $patient->dosage4 = $request->input('dosage4');
             $patient->dosage5 = $request->input('dosage5');
             $patient->dosage6 = $request->input('dosage6');
             $patient->drug1 = $request->input('drug1');
             $patient->drug2 = $request->input('drug2');
             $patient->drug3 = $request->input('drug3');
             $patient->drug4 = $request->input('drug4');
             $patient->drug5 = $request->input('drug5');
             $patient->drug6 = $request->input('drug6');
             $patient->frequency1 = $request->input('frequency1');
             $patient->frequency2 = $request->input('frequency2');
             $patient->frequency3 = $request->input('frequency3');
             $patient->frequency4 = $request->input('frequency4');
             $patient->frequency5 = $request->input('frequency5');
             $patient->frequency6 = $request->input('frequency6');
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
              return redirect()->back()->with('success', 'Great!, patient\'s record saved');//I just set the message for session(success).
 
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
