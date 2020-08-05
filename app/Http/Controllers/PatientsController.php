<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\patientMail;
use Illuminate\Support\Facades\Mail;
use App\patients;
class PatientsController extends Controller
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
        return view("patients.create");
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
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'gender' => 'required',
            'add' => 'required',
            'temprature' => 'nullable',
            'height' => 'nullable',
            'weight' => 'nullable',
            'genotype' => 'nullable',
            'h_rate' => 'nullable',
            'bp' => 'nullable',
            'b_group' => 'nullable',
             //image means it must be in image format|nullable means the field is optional, then max size is 1999
             'pp' => 'image|nullable|max:1999'
             ]);
            //Handle file upload
            if($request->hasFile('pp')){
                //Get file name with the extension
                $filenameWithExt = $request->file('pp')->getClientOriginalName();
                //get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    
                // Get just Ext
                $extension = $request->file('pp')->getClientOriginalExtension();
    
                // File name to store
                $fileNameTostore = $filename.'_'.time().'.'.$extension;
    
                // Upload Image
                $path = $request->file('pp')->move('img/cover_img', $fileNameTostore);
    
            }
            else{
                //default image for post if none was choosed
                $fileNameTostoreone = 'share3.png';
            }
            $patient = new patients;
            $patient->email = $request->input('email');
            $patient->name = $request->input('name');
           //This will get the user input for title
            $patient->phone = $request->input('number');
            $patient->gender = $request->input('gender');
            $patient->address = $request->input('add');
            $patient->doctor = auth()->user()->name;
            $patient->doc_email = auth()->user()->email;
            $patient->temp = $request->input('temprature');
            $patient->height = $request->input('height');
            $patient->weight = $request->input('weight');
            $patient->genotype = $request->input('genotype');
            $patient->h_rate = $request->input('h_rate');
            $patient->bp = $request->input('bp');
            $patient->b_group = $request->input('b_group');
            $patient->img = $fileNameTostore;
             //Save to db
             $patient->save(); 
             //send mail
             $data = request()->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
        
            //Send mail
               
                Mail::to($request->input('email'))->send(new patientMail($data));
              
             return redirect('/dashboard')->with('success', 'Great!, patient has been added and notified.');//I just set the message for session(success).

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
