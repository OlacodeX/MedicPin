<?php

namespace App\Http\Controllers;
use App\Bills;
use App\Lab;
use App\patients;
use App\User;
use App\Messages;
use Illuminate\Http\Request;

class LabsController extends Controller
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
        $patient = patients::orderBy('created_at', 'desc')->where('pin', $pin)->first();
        $patients = Lab::orderBy('created_at', 'desc')->where('patient_pin', $pin)->whereDay('created_at', now()->day)->get();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        $data = array(
            'new_messages' => $new_messages,
            'patients' => $patients,
            'patient' => $patient
        );

        return view('pages.labtest', $data);
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
        $id = $_GET['id'];
        $test = Lab::where('id', $id)->first();
        $data = array(
            'test' => $test,
            'pin' => $pin
        );
        return view('pages.test_validate', $data);
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
               
            $test = new Lab;    
            $patientt = patients::where('pin', $request->input('p_pin'))->first();
            $test->test_name = $request->input('test1');
            $test->patient_name = $patientt->name;
            $test->patient_pin = $request->input('p_pin');
            $test->status = 'Pending';
            $test->doc_name = auth()->user()->name;
            $test->doc_pin = auth()->user()->pin;
            $test->save();
            if ($request->input('test2') !== 'Select') {
                $test2 = new Lab;
                $test2->test_name = $request->input('test2');
                $test2->patient_name = $patientt->name;
                $test2->patient_pin = $request->input('p_pin');
                $test2->status = 'Pending';
                $test2->doc_name = auth()->user()->name;
                $test2->doc_pin = auth()->user()->pin;
                $test2->save();
            }
            return redirect()->back()->with('success', 'Great!, Patient can now proceed to the lab to carry out test.');
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
        $lab = Lab::find($id);
             
        if($request->hasFile('report')){
           //Get file name with the extension
          $filenameWithExt = $request->file('report')->getClientOriginalName();
           //get just file name
           $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
   
           // Get just Ext
           $extension = $request->file('report')->getClientOriginalExtension();
   
           // File name to store
           $fileNameTostore = $lab->patient_name.'_'.$lab->test_name.'.'.$extension;
   
           // Upload Image
           $path = $request->file('report')->move('img/lab_report', $fileNameTostore);
   
           // crop image
           /*** 
           $img = Image::make(public_path('img/profile/'.$filenametostore));
           $croppath = public_path('img/profile/crop/'.$filenametostore);
    
           $img->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
           $img->save($croppath);
    
           // you can save crop image path below in database
           $path = asset('img/profile/crop/'.$filenametostore);*/
           $lab->report = $fileNameTostore;
       }
   
        $lab->status = 'Done';
        $lab->carriedout_by = auth()->user()->pin;
        $lab->save();
        $bill = new Bills;
        $user = User::where('pin', $lab->patient_pin)->first();
        $bill->patient_name = $user->name;
        $bill->patient_pin = $user->pin;
        $bill->service = $lab->test_name.' Test';
        $bill->status = 'Unpaid';
        $bill->amount = $request->input('price');
        $bill->action_by = auth()->user()->pin;
        $bill->save();

       return redirect()->back()->with('success', 'Great!, Patient can go back to doctor now.');
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
