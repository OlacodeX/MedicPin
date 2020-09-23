<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescriptions;
use App\Bills;
use App\pharmacy;
use App\Records;
use App\Consortations;
use App\User;
use App\Messages;

class PrescriptionController extends Controller
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
        $prescription1 = new Prescriptions;
        $prescription1->sickness = $request->input('sickness');
        $prescription1->drug = $request->input('drug1');
        $prescription1->patient_pin = $request->input('pin');
        $prescription1->dosage = $request->input('dose1');
        $prescription1->frequency = $request->input('frequency1');
        $prescription1->prescribed_by = auth()->user()->pin;
        $prescription1->save();
        if ($request->input('drug2') !== 'Select') {
            $prescription2 = new Prescriptions;
            $prescription2->sickness = $request->input('sickness');
            $prescription2->drug = $request->input('drug2');
            $prescription2->patient_pin = $request->input('pin');
            $prescription2->dosage = $request->input('dose2');
            $prescription2->frequency = $request->input('frequency2');
            $prescription2->prescribed_by = auth()->user()->pin;
            $prescription2->save();
        }
        if ($request->input('drug3') !== 'Select') {
            $prescription3 = new Prescriptions;
            $prescription3->sickness = $request->input('sickness');
            $prescription3->drug = $request->input('drug3');
            $prescription3->patient_pin = $request->input('pin');
            $prescription3->dosage = $request->input('dose3');
            $prescription3->frequency = $request->input('frequency3');
            $prescription3->prescribed_by = auth()->user()->pin;
            $prescription3->save();
        }

        $pin = $_POST['pin'];  
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
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
              return redirect()->back()->with('success', 'Great, prescription sent!');
        
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
        $drug = Prescriptions::find($id);
        $drug->sold_by = auth()->user()->pin;
        $drug->status = 'sold';
        $drug->save();
        $drug1 = pharmacy::where('id', $drug)->first();
        $bill = new Bills;
        $user = User::where('pin', $request->input('pin'))->first();
        $bill->patient_name = $user->name;
        $bill->patient_pin = $user->pin;
        $bill->service = 'Purchase of '.$drug1->name;
        $bill->status = 'Unpaid';
        $bill->amount = $drug1->price;
        $bill->action_by = auth()->user()->pin;
        $bill->save();
        return redirect()->back()->with('success', 'Drug Sold');

    }
    public function NA(Request $request)
    {
        //
        $drug = Prescriptions::find($request->input('id'));
        $drug->sold_by = auth()->user()->pin;
        $drug->status = 'not available';
        $drug->save();
        return redirect()->back()->with('success', 'Done');

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
