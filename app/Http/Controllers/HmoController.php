<?php

namespace App\Http\Controllers;

use App\Messages;
use App\patients;
use App\HMO;
use App\hmo_h;
use App\hospitals;
use Illuminate\Http\Request;

class HmoController extends Controller
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
        
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        return view("pages.create")->with('new_messages', $new_messages);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_hospital()
    {
        //
        
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        return view("pages.add_hospital")->with('new_messages', $new_messages);

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
            'price' => 'nullable',
            'value' => 'nullable',
             ]);
             $package = new HMO;
             $package->name = $request->input('name');
             $package->price = $request->input('price');
             $package->description = $request->input('value');
             $package->hmo = auth()->user()->id;
            $package->save();
            
              
            return redirect()->back()->with('success', 'Great!, package created.');//I just set the message for session(success).
     
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_hospital(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'nullable',
            'email' => 'nullable',
            'address' => 'nullable',
             ]);
             if(!empty($request->input('h_email'))){
                 $m_hospital = hospitals::where('h_email',$request->input('h_email'))->first();

                 if (!empty($m_hospital)) {
                    $hospital = new hmo_h;
                    $hospital->name = $m_hospital->h_name;
                    $hospital->email = $request->input('h_email');
                    $hospital->address = $m_hospital->h_add;
                    $hospital->hmo_id = auth()->user()->id;
                    $hospital->save();
                    $m_hospital->hmo = auth()->user()->id;
                    $m_hospital->save();
    
                 }

                 else{
                     return redirect()->back()->with('error', 'No hospital with this email in our records!');
                 }
             }
             else{
             $hospital = new hmo_h;
             $hospital->name = $request->input('name');
             $hospital->email = $request->input('email');
             $hospital->address = $request->input('address');
             $hospital->hmo_id = auth()->user()->id;
             $hospital->save();
             
            }
              
            return redirect()->back()->with('success', 'Great!, hospital added.');//I just set the message for session(success).
     
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
