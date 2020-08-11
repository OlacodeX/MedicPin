<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patients;
use App\Records;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pin = $_GET['pin'];
        $username = $_GET['username'];
        $record = Records::where('pin', $pin)->orderBy('created_at', 'desc')->first();
        $records = Records::where('pin', $pin)->orderBy('created_at', 'desc')->paginate(50);
        $data = array(
            'username' => $username,
            'records' => $records,
            'record' => $record
        );
        return view('patients.index', $data);
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
             $patient->username = $patientt->username;
             $patient->gender = $patientt->gender;
             $patient->doc_email = auth()->user()->email;
             $patient->doctor = auth()->user()->name;
             $patient->pin = $pin;
             if($request->input('b_group') !== 'select'){
             $patient->b_group = $request->input('b_group');
             }
             //Save to db
              $patient->save();
              return redirect('/patients')->with('success', 'Great!, patient\'s record updated');//I just set the message for session(success).
 
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
