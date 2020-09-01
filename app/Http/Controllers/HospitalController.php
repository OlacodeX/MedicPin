<?php

namespace App\Http\Controllers;

use App\hospitals;
use App\User;
use App\HospitalDoctors;
use App\Messages;
use App\Operations;
use App\patients;
use App\Mail\MessageNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HospitalController extends Controller
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
    }
    public function add_op()
    {
        //
        if (auth()->user()->role == 'Doctor') {
            $hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
            $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
            $data = array(
                'new_messages' => $new_messages,
                'hospital' => $hospital
            );
             return view("hospitals.add_op", $data);
            
        }
        else{
            return view('pages-error');
        }
    }

    public function store_op(Request $request)
    {
        //
        
        $this->validate($request, [
            'name' => 'nullable',
            'email' => 'nullable',
            'number' => 'nullable',
            'gender' => 'nullable',
            'add' => 'nullable',
             //image means it must be in image format|nullable means the field is optional, then max size is 1999
             'report' => 'nullable|max:2500' /**'mimes:jpeg,png,pdf,doc,docx|nullable|max:2500'**/
             ]);
            //Handle file upload
            if($request->hasFile('report')){
                //Get file name with the extension
              $filenameWithExt = $request->file('report')->getClientOriginalName();
                //get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    
                // Get just Ext
                $extension = $request->file('report')->getClientOriginalExtension();
    
                // File name to store
                $fileNameTostore = $filename.'_'.time().'.'.$extension;
    
                // Upload Image
                $path = $request->file('report')->move('img/reports', $fileNameTostore);
    
            }
            //else{
                //default image for post if none was choosed
               //$fileNameTostore = 'share3.png';
            ///}
            //If 
            if (!empty($request->input('email'))) {
                # code...
            $pin1 = mt_rand(9, 10) + time();
        
            $pin = 'MP'.($pin1 + 73);
            $patient = new patients;
            $op = new Operations;
            $user = patients::where('email',$request->input('email'))->first();
            if (!empty($user)) {
                return redirect()->back()->with('error', 'Patient is Already Registered, Kindly Input MedicPin To Continue.');//I just set the message for session(success).
   
            }
            else{
                $patient->email = $request->input('email');
            
          
            $patient->name = $request->input('name');
           //This will get the user input for title
            $patient->phone = $request->input('number');
            $patient->gender = $request->input('gender');
            $patient->address = $request->input('add');
            $patient->doctor = auth()->user()->name;
            $patient->doc_email = auth()->user()->email;
            $patient->pin = $pin;
            //$patient->status = 'pending';
           /// $patient->img = $fileNameTostore;
             //Save to db
             $patient->save(); 
             
             $op->patient_pin = $pin;
             $op->report = $fileNameTostore;
             $op->type = $request->input('type');
             $disease1 = $_POST['disease1'];
             $disease2 = $_POST['disease2'];
             $disease3 = $_POST['disease3'];
             $disease4 = $_POST['disease4'];
             $disease5 = $_POST['disease5'];
             $disease6 = $_POST['disease6'];
             $disease7 = $_POST['disease7'];
             $disease8 = $_POST['disease8'];
             $disease9 = $_POST['disease9'];
             if($disease1 !== 'N/A'){
                 $op->disease = $disease1;
             }  
             if($disease2 !== 'N/A'){
                 $op->disease = $disease2;
             }  
             if($disease3 !== 'N/A'){
                 $op->disease = $disease3;
             }  
             if($disease4 !== 'N/A'){
                 $op->disease = $disease4;
             } 
             if($disease5 !== 'N/A'){
                 $op->disease = $disease5;
             }  
             if($disease6 !== 'N/A'){
                 $op->disease = $disease6;
             }  
             if($disease7 !== 'N/A'){
                 $op->disease = $disease7;
             } 
             if($disease8 !== 'N/A'){
                 $op->disease = $disease8;
             }  
             if($disease9 !== 'N/A'){
                 $op->disease = $disease9;
             }
             elseif($disease == 'N/A' && $disease2 == 'N/A' && $disease3 == 'N/A' && $disease4 == 'N/A' && $disease5 == 'N/A' && $disease6 == 'N/A' && $disease7 == 'N/A' && $disease8 == 'N/A' && $disease9 == 'N/A') {
                 $op->disease = 'N/A';
             }
             $op->status = $request->input('status');
             $doctor_1 = User::where('pin', $request->input('doc_pin1'))->first();
             if(!empty($doctor_1)){
              $op->docname_1 = $doctor_1->name;
              $op->doc_1 = $doctor_1->pin;
             }
             else {
              return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin1').' Does Not Exist, Kindly Check And Try Again.');
             }
             if (!empty($request->input('doc_pin2'))) {
                 # code...
             $doctor_2 = User::where('pin', $request->input('doc_pin2'))->first();
             if(!empty($doctor_2)){
              $op->docname_2 = $doctor_2->name;
              $op->doc_2 = $doctor_2->pin;
             }
             else {
              return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin2').' Does Not Exist, Kindly Check And Try Again.');
             }
            }
            if (!empty($request->input('doc_pin3'))) {
                # code...
             $doctor_3 = User::where('pin', $request->input('doc_pin3'))->first();
             if(!empty($doctor_3)){
              $op->docname_3 = $doctor_3->name;
              $op->doc_3 = $doctor_3->pin;
             }
             else {
              return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin3').' Does Not Exist, Kindly Check And Try Again.');
             }
            }
            if (!empty($request->input('doc_pin4'))) {
                # code...
             $doctor_4 = User::where('pin', $request->input('doc_pin4'))->first();
             if(!empty($doctor_4)){
              $op->docname_4 = $doctor_4->name;
              $op->doc_4 = $doctor_4->pin;
             }
             else {
              return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin4').' Does Not Exist, Kindly Check And Try Again.');
             }
            }
            if (!empty($request->input('doc_pin5'))) {
                # code...
             $doctor_5 = User::where('pin', $request->input('doc_pin5'))->first();
             if(!empty($doctor_5)){
              $op->docname_5 = $doctor_5->name;
              $op->doc_5= $doctor_5->pin;
             }
             else {
              return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin5').' Does Not Exist, Kindly Check And Try Again.');
             }
            }
             $op->added_by = auth()->user()->id;
             $op->h_id = auth()->user()->h_id;
             $op->addedBy_pin = auth()->user()->pin;
             $op->save();
            }
             //send mail
             $data = request()->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
        
            //Send mail
               
                Mail::to($request->input('email'))->send(new patientMail($data));
                return redirect()->back()->with('success', 'Operation Added.');
              
            }

            elseif(!empty($request->input('pin'))){
                
            $user = patients::where('pin',$request->input('pin'))->first();
            $op = new Operations;
            if (empty($user)) {
                return redirect()->back()->with('error', 'oops, no patient with this pin in our record, please check and try again or enter details to register.');
            }
            else {
                $op->type = $request->input('type');
                $op->report = $fileNameTostore;
                $disease1 = $_POST['disease1'];
                $disease2 = $_POST['disease2'];
                $disease3 = $_POST['disease3'];
                $disease4 = $_POST['disease4'];
                $disease5 = $_POST['disease5'];
                $disease6 = $_POST['disease6'];
                $disease7 = $_POST['disease7'];
                $disease8 = $_POST['disease8'];
                $disease9 = $_POST['disease9'];
                if($disease1 !== 'N/A'){
                    $op->disease = $disease1;
                }  
                if($disease2 !== 'N/A'){
                    $op->disease = $disease2;
                }  
                if($disease3 !== 'N/A'){
                    $op->disease = $disease3;
                }  
                if($disease4 !== 'N/A'){
                    $op->disease = $disease4;
                } 
                if($disease5 !== 'N/A'){
                    $op->disease = $disease5;
                }  
                if($disease6 !== 'N/A'){
                    $op->disease = $disease6;
                }  
                if($disease7 !== 'N/A'){
                    $op->disease = $disease7;
                } 
                if($disease8 !== 'N/A'){
                    $op->disease = $disease8;
                }  
                if($disease9 !== 'N/A'){
                    $op->disease = $disease9;
                }
                elseif($disease1 == 'N/A' && $disease2 == 'N/A' && $disease3 == 'N/A' && $disease4 == 'N/A' && $disease5 == 'N/A' && $disease6 == 'N/A' && $disease7 == 'N/A' && $disease8 == 'N/A' && $disease9 == 'N/A') {
                    $op->disease = 'N/A';
                }
                $op->status = $request->input('status');
               $op->patient_pin = $user->pin;
               $op->type = $request->input('type');
               $op->status = $request->input('status');
               //$op->disease = $request->input('disease');
               $doctor_1 = User::where('pin', $request->input('doc_pin1'))->first();
               if(!empty($doctor_1)){
                $op->docname_1 = $doctor_1->name;
                $op->doc_1 = $doctor_1->pin;
               }
               else {
                return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin1').' Does Not Exist, Kindly Check And Try Again.');
               }
               $doctor_2 = User::where('pin', $request->input('doc_pin2'))->first();
               if(!empty($doctor_2)){
                $op->docname_2 = $doctor_2->name;
                $op->doc_2 = $doctor_2->pin;
               }
               else {
                return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin2').' Does Not Exist, Kindly Check And Try Again.');
               }
               $doctor_3 = User::where('pin', $request->input('doc_pin3'))->first();
               if(!empty($doctor_3)){
                $op->docname_3 = $doctor_3->name;
                $op->doc_3 = $doctor_3->pin;
               }
               else {
                return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin3').' Does Not Exist, Kindly Check And Try Again.');
               }
               $doctor_4 = User::where('pin', $request->input('doc_pin4'))->first();
               if(!empty($doctor_4)){
                $op->docname_4 = $doctor_4->name;
                $op->doc_4 = $doctor_4->pin;
               }
               else {
                return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin4').' Does Not Exist, Kindly Check And Try Again.');
               }
               $doctor_5 = User::where('pin', $request->input('doc_pin5'))->first();
               $doctor_4 = User::where('pin', $request->input('doc_pin5'))->first();
               if(!empty($doctor_4)){
                $op->docname_5 = $doctor_4->name;
                $op->doc_5= $doctor_5->pin;
               }
               else {
                return redirect()->back()->with('error', 'Doctor With Pin '.$request->input('doc_pin5').' Does Not Exist, Kindly Check And Try Again.');
               }
               $op->added_by = auth()->user()->id;
               $op->h_id = auth()->user()->h_id;
               $op->addedBy_pin = auth()->user()->pin;
               $op->save();
               return redirect()->back()->with('success', 'Operation Added.');
            } 
    }
    else{
        return view('pages-error');
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
        if (auth()->user()->role == 'Doctor') {
        $hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'new_messages' => $new_messages,
            'hospital' => $hospital
        );
        return view("hospitals.create", $data);
        
    }
    else{
        return view('pages-error');
    }
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
        if (auth()->user()->role == 'Doctor') {
        $this->validate($request, [
            'h_name' => 'required',
            'h_email' => 'required',
            'h_number' => 'required',
            'h_type' => 'required',
            'h_add' => 'required',
             ]);
             $hospital = new hospitals;
             $hospital->h_name = $request->input('h_name');
             $hospital->h_email = $request->input('h_email');
             $hospital->h_add = $request->input('h_add');
             $hospital->h_type = $request->input('h_type');
             $hospital->h_number = $request->input('h_number');
             $hospital->user_pin = auth()->user()->pin;
             $hospital->user_name = auth()->user()->name;
             $hospital->user_id = auth()->user()->id;
            $hospital->save();
            
              
            return redirect('/hospitals')->with('success', 'Great!, hospital created.');//I just set the message for session(success).
     
        }
        else{
            return view('pages-error');
        }
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
        if (auth()->user()->role == 'Doctor') {
            $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
            $hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
            $operations = Operations::orderBy('created_at', 'desc')->where('h_id', $hospital->id)->get();
            $data = array(
                'new_messages' => $new_messages,
                'operations' => $operations,
                'hospital' => $hospital
            );
            return view('hospitals.index', $data);
         
        }
        else{
            return view('pages-error');
        }
    }
    public function add_doc()
    {
        //
        if (auth()->user()->role == 'Doctor') {
        $id = $_POST['id'];
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $hospital = hospitals::orderBy('created_at', 'desc')->where('id', $id)->first();
        $data = array(
            'new_messages' => $new_messages,
            'hospital' => $hospital
        );
        return view('hospitals.add_doc', $data);
     
    }
    else{
        return view('pages-error');
    }
    }
    public function doctors()
    {
        //
        if (auth()->user()->role == 'Doctor') {
        $id = $_POST['id'];
        $hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $doctors = HospitalDoctors::orderBy('created_at', 'desc')->where('h_id', $id)->get();
        $data = array(
            'new_messages' => $new_messages,
            'hospital' => $hospital,
            'doctors' => $doctors
        );
        return view('hospitals.list', $data);
     
    }
    else{
        return view('pages-error');
    }
    }
    public function search()
    {
        //
        $pin = $_POST['pin'];
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        
        $hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
        $doctor = HospitalDoctors::orderBy('created_at', 'desc')->where('doctor_pin', $pin)->first();
        if (empty($doctor)) {
            return redirect('/hospitals')->with('error', 'oops, no doctor with this record in your hospital.');
        }
        else{
        $data = array(
            'new_messages' => $new_messages,
            'hospital' => $hospital,
            'doctor' => $doctor
        );
        return view('hospitals.search_result', $data);
    }
    }
    public function store_doc(Request $request)
    {
        //
        if (auth()->user()->role == 'Doctor') {
        $this->validate($request, [
            'pin' => 'required',
             ]);
            $doctor = User::where('pin', $request->input('pin'))->first();
            if (empty($doctor)) {
                return redirect('/hospitals')->with('error', 'oops, no doctor with this pin in our record, please check and try again.');
            }
            else{
             $hospital = new HospitalDoctors;
             $hospital->h_name = $request->input('h_name');
             $hospital->h_id = $request->input('h_id');
             $hospital->doctor_pin = $doctor->pin;
             $hospital->doctor_name = $doctor->name;
             //$hospital->h_number = $request->input('h_number');
             //$hospital->user_pin = auth()->user()->pin;
             $hospital->addedby_pin = auth()->user()->pin;
             $hospital->added_by = auth()->user()->id;
            $hospital->save();
            
              $doctor->h_id = $request->input('h_id');
              $doctor->h_name = $request->input('h_name');
              $doctor->save();
            return redirect('/hospitals')->with('success', 'Great!, doctor added.');//I just set the message for session(success).
            }
                 
    }
    else{
        return view('pages-error');
    }
    }

    /**
     * Show the form for creating a new resource.
     *@param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function message()
    {
        //
        $pin = $_GET['pin'];
        $doctor = User::where('pin', $pin)->first();
        $hospital = hospitals::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->first();
        $new_messages = Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->orderBy('created_at', 'desc')->get();
        $data = array(
            'doctor' => $doctor,
            'hospital' => $hospital,
            'new_messages' => $new_messages
        );
        return view("hospitals.message", $data);
    }

    public function store_message(Request $request)
    {
        //
        $data = request()->validate([
            'receiver_name' => 'required|nullable',
            'receiver_email' => 'required',
            'message' => 'required',
            //'sender' => auth()->user()->u_name,
        ]);
                 
       $message = new Messages;
       $message->receiver_id = $request->input('receiver_id');
       $message->receiver_name = $request->input('receiver_name');
       $message->receiver_pin = $request->input('receiver_pin');
       $message->sender_id = auth()->user()->id;
       $message->sender_email = auth()->user()->email;
       
       $message->message_id = $request->input('message_id');
       $message->sender_name = auth()->user()->name;
       $message->message = $request->input('message');
        //$comment->topic_id = $request->input('topic_id');
        //Save to db
     $message->save();
     
    Mail::to($request->input('receiver_email'))->send(new MessageNotification($data));
     return redirect()->back()->with('success', 'Message sent');
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
        $hospital = hospitals::find($id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       $data = array(
                'hospital' => $hospital,
                'new_messages' => $new_messages
       );

        return view('hospitals.edit', $data);
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

        $this->validate($request, [
            'h_name' => 'required',
            'h_email' => 'required',
            'h_number' => 'required',
            'h_type' => 'required',
            'h_add' => 'required',
             ]);
             $hospital = hospitals::find($id);
             $hospital->h_name = $request->input('h_name');
             $hospital->h_email = $request->input('h_email');
             $hospital->h_add = $request->input('h_add');
             $hospital->h_type = $request->input('h_type');
             $hospital->h_number = $request->input('h_number');
            $hospital->save();
            
              
            return redirect('/hospitals')->with('success', 'Great!, hospital details updated.');//I just set the message for session(success).

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
        $pin = $_POST['pin'];
        $user_update = User::where('pin', $pin)->first();
        $user_update->h_id = NULL;
        $user_update->h_name = NULL;
        $user_update->save();
        $doctor = HospitalDoctors::find($id);
       $doctor->delete();
        return redirect('/hospitals')->with('success', 'Doctor Removed from your hospital.');
        
    }
    
    public function destroyy()
    {
        //
        $id = $_POST['id'];
        $hospital = hospitals::find($id);
       $hospital->delete();
        return redirect('/dashboard')->with('success', 'Hospital removed from our database.');
        
    }
}
