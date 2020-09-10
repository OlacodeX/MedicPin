<?php

namespace App\Http\Controllers;
use App\patients;
use App\Admission;
use App\Messages;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $patient = patients::where('pin', $pin)->first();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        $data = array(
            'patient' => $patient,
            'new_messages' => $new_messages
        );
        return view('patients.admit', $data);

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
            'reason' => 'required',
        ]); 

        $patient = patients::where('pin', $request->input('patient'))->first();

            $admit = new Admission;
            $admit->patient  =  $request->input('patient');
            $admit->reason =  $request->input('reason');
            $admit->admitted_by = auth()->user()->pin;
            //Save to db
            $admit->save();
            $patient->status = 'Admitted';
            $patient->save();
            $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
            $data = array(
                'patient' => $patient,
                'new_messages' => $new_messages
       );
            return redirect()->back()->with('success', 'Patient Admitted!');

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
        $patient = patients::where('pin', $request->input('pin'))->first();
        $patient->status = 'Discharged';
        $patient->save();
        return redirect()->back()->with('success', 'Patient Discharged!');
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
