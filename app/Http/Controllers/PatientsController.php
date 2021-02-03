<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\patientMail;
use App\Mail\TransferMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\patients;
use App\HospitalDoctors;
use App\pharmacy;
use App\User;
use App\Messages;
use App\Records;
use App\Transfers;
class PatientsController extends Controller
{ 
    
     /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth',['except' => ['reg_patient']]);
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
       
        $doctor = HospitalDoctors::where('h_id', auth()->user()->h_id)->pluck('doctor_name');
        $users =patients::where('doc_email', auth()->user()->email)->paginate(100);
        $h_users = patients::whereIn('doctor',$doctor )->paginate(100);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'users' => $users,
            'h_users' => $h_users,
            'new_messages' => $new_messages
   );
        return view("patients.list", $data);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_drug()
    {
        $users = patients::where('doc_email', auth()->user()->email)->paginate(100);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'users' => $users,
            'new_messages' => $new_messages
   );
        return view("patients.add_drug", $data);
    }
    public function transfered()
    {
        $users = Transfers::where('from_doc_email', auth()->user()->email)->paginate(100);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'users' => $users,
            'new_messages' => $new_messages
   );
        return view("patients.transfer_list", $data);
    }
    public function pharmacy()
    {
        $doc = User::where('h_id', auth()->user()->h_id)->pluck('pin');
        $drugs = pharmacy::orderBy('created_at', 'desc')->orderBy('status', 'asc')->whereIn('doc_pin', $doc)->paginate(10);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'drugs' => $drugs,
            'new_messages' => $new_messages
   );
        return view("patients.drugs", $data);
    }
    public function pharmacist()
    {
        $doc = User::where('h_id', auth()->user()->h_id)->pluck('pin');
        $drugs = pharmacy::orderBy('created_at', 'desc')->orderBy('status', 'asc')->paginate(10);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'drugs' => $drugs,
            'new_messages' => $new_messages
   );
        return view("patients.ph", $data);
    }
    public function myshop()
    {
        $drugs = pharmacy::where('doc_pin', auth()->user()->pin)->orderBy('created_at', 'desc')->paginate(3);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'drugs' => $drugs,
            'new_messages' => $new_messages
   );
        return view("patients.mydrugs", $data);
    }
    /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function search()
        {
            $pin = $_POST['pin'];
            $get_h_id = User::where('pin', $pin)->first();
            $user = patients::where('pin', $pin)->first();
            if($get_h_id->h_id == auth()->user()->h_id){
            $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
            $data = array(
                'user' => $user,
                'new_messages' => $new_messages
       );
            return view("patients.search_result", $data);
        }
   
    else{
        return redirect()->back()->with('error', 'You Don\'t Have Access To This Patient\'s Record.');
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
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        return view("patients.create")->with('new_messages', $new_messages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transfer()
    {
        //
        $pin = $_POST['pin'];
        $patient = patients::where('pin', $pin)->first();
        $doctor = User::where('role', 'doctor')->get();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        $data = array(
            'patient' => $patient,
            'new_messages' => $new_messages,
            'doctor' => $doctor
        );
        return view('patients.transfer', $data);
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
            'name' => 'nullable',
            'email' => 'nullable',
            'number' => 'nullable',
            'gender' => 'nullable',
            'add' => 'nullable',
             //image means it must be in image format|nullable means the field is optional, then max size is 1999
             ///'pp' => 'image|nullable|max:1999'
             ]);
            //Handle file upload
            ///if($request->hasFile('pp')){
                //Get file name with the extension
              ///  $filenameWithExt = $request->file('pp')->getClientOriginalName();
                //get just file name
                ///$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    
                // Get just Ext
                ///$extension = $request->file('pp')->getClientOriginalExtension();
    
                // File name to store
                ///$fileNameTostore = $filename.'_'.time().'.'.$extension;
    
                // Upload Image
                ///$path = $request->file('pp')->move('img/cover_img', $fileNameTostore);
    
            ///}
           //// else{
                //default image for post if none was choosed
               ///$fileNameTostore = 'share3.png';
            ///}
            if(!empty($request->input('pin'))){
                $patient = patients::where('pin',$request->input('pin'))->first();
                $patient->doctor = auth()->user()->name;
                $patient->doc_email = auth()->user()->email;
                $patient->save();
                //send mail
                $data = request()->validate([
                   'name' => 'nullable',
                   'email' => 'nullable',
               ]);
                       
                        Mail::to($patient->email)->send(new patientMail($data));
                 
            }
            else{
            $pin1 = mt_rand(9, 10) + time();
        
            $pin = 'MP'.($pin1 + 73);
            $patient = new patients;
            $user = patients::where('email',$request->input('email'))->first();
            if (!empty($user)) {
                return redirect('/patients/create')->with('error', 'Patient Email Already Exist.');//I just set the message for session(success).
   
            }
            else{
                $patient->email = $request->input('email');
            }
          
            $patient->name = $request->input('name');
           //This will get the user input for title
            $patient->phone = $request->input('number');
            $patient->cc = $request->input('cc');
            $patient->gender = $request->input('gender');
            $patient->address = $request->input('add');
            $patient->doctor = auth()->user()->name;
            $patient->doc_email = auth()->user()->email;
            $patient->pin = $pin;
            //$patient->status = 'pending';
           /// $patient->img = $fileNameTostore;
             //Save to db
             $patient->save(); 
             //send mail
             $data = request()->validate([
                'name' => 'nullable',
                'email' => 'nullable',
            ]);
                    
                     Mail::to($request->input('email'))->send(new patientMail($data));
              
        }     
             return redirect('/dashboard')->with('success', 'Great!, patient has been added and notified.');//I just set the message for session(success).

    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_drug(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'nullable',
            'price' => 'nullable',
            'description' => 'nullable',
            'sell' => 'nullable',
            'make' => 'nullable',
            'weight' => 'nullable',
             //image means it must be in image format|nullable means the field is optional, then max size is 1999
             'img' => 'image|nullable|max:2000'
             ]);
            //Handle file upload
            if($request->hasFile('img')){
              $filenameWithExt = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('img')->getClientOriginalExtension();
                $fileNameTostore = $request->input('name').'_'.time().'.'.$extension;
                $path = $request->file('img')->move('img/drugs', $fileNameTostore);
                  }
            else{
                  $fileNameTostoreone = 'yy.jpg';
            }
            $drug = new pharmacy;
          
            $drug->name = $request->input('name');
           //This will get the user input for title
            $drug->img = $fileNameTostore;
            $drug->price = $request->input('price');
            $drug->weight = $request->input('weight');
            $drug->description = $request->input('describe');
            $drug->sell = $request->input('sell');
            $drug->make = $request->input('make');
            $drug->category = $request->input('category');
            $drug->doc_pin = auth()->user()->pin;
            $drug->status = 'In Stock';
            $drug->save();
            //$patient->status = 'pending';
             return redirect('/dashboard')->with('success', 'Great!, drug has been added to our database.');//I just set the message for session(success).

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_transfer(Request $request)
    {
        //
        $this->validate($request, [
            'note' => 'required',
            'pin' => 'required',
             ]);
             
            $doc = $request->input('doc_pin');
            $new_doc = User::where('pin', $doc)->first();
            $patient = new Transfers;
            $patient->from_doc_email = $request->input('from_email');
            $patient->from_doctor = $request->input('from');
            $patient->patient_name = $request->input('name');
            $patient->to_doctor = $new_doc->name;
            $patient->note =  $request->input('note');
            $patient->to_doc_email = $new_doc->email;
            $patient->pin = $request->input('pin');
            $patient->doc_pin = $doc;
           
             //Save to db
             $patient->save(); 
             $doc = $request->input('doc_pin');
             $new_doc = User::where('pin', $doc)->first();
             
             $update_patient = patients::where('doctor', $request->input('from'))->where('pin',$request->input('pin'))->first();
            
             $update_patient->doc_email = $new_doc->email;
             $update_patient->doctor = $new_doc->name;
 
             //Save to db
             $update_patient->save(); 
             //send mail
             $data = request()->validate([
                'name' => 'required',
                'from_email' => 'required',
                'from' => 'required',
                'note' => 'required',
                'doc_pin' => 'required',
                'pin' => 'required',
            ]);
        
            //Send mail
               
                Mail::to($request->input('from_email'))->send(new TransferMail($data));
              
             return redirect('/patients')->with('success', 'Great!, patient record has been transferred..');//I just set the message for session(success).

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reg_patient(Request $request)
    {
        $email = $_POST['email'];
        //$username = $_POST['username'];
        $this->validate($request, [
            'name' => 'required',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);
        $update_patient = patients::where('email', $email)->first();
        if (empty($update_patient->email)) {
            return redirect('/account_set_up')->with('error', 'No patient with this email in our records. Kindly confirm you are using the same details you were registered with by your doctor or ask them to send you a new invite with this email.');//I just set the message for session(success).

        }
        else{
            $update_patient->age = $request->input('age');
            $update_patient->address = $request->input('add');
            $update_patient->gender = $request->input('gender');
            $update_patient->occupation = $request->input('occupation');
            $update_patient->nok_relation = $request->input('nok_relation');
            $update_patient->nok = $request->input('nok');
            $update_patient->phone = $request->input('phone');
            $update_patient->cc = $request->input('cc');
            $update_patient->nok_phone = $request->input('nokp');
            //$update_patient->occupation = $request->input('occupation');
            //$update_patient->nok = $request->input('nok');
            //Save to db
            $update_patient->save();

        }
        $user = new User;
        //$patient = patients::where('email', $email)->first();
        //$update_patient->pin = $pin;
        
      if($request->hasFile('pp')){
        $filenameWithExt = $request->file('pp')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          $extension = $request->file('pp')->getClientOriginalExtension();
          $fileNameTostore = $request->input('name').'_'.time().'.'.$extension;
          $path = $request->file('pp')->move('img/profile', $fileNameTostore);
            }
            else{
                 //default image for post if none was choosed
               $fileNameTostore = '1.jpeg';
            }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->gender = $request->input('gender');
        $user->type = $request->input('type');
        $user->cc = $request->input('cc');
        $user->img = $fileNameTostore;
        $user->p_number = $request->input('phone');
        $user->nhis = $request->input('nhis');
        $user->pin = $update_patient->pin;
        $user->age = $request->input('age');
        $user->password =  Hash::make($request->input('password'));
        
        //Save to db
        $user->save();
        //print success message and redirect
        return redirect('./dashboard');//I just set the message for session(success).

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_record()
    {
        //
        $pin = $_GET['pin'];
        $record = Records::where('pin', $pin)->orderBy('created_at', 'desc')->first();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'pin' => $pin,
            'record' => $record,
            'new_messages' => $new_messages
   );
        return view('patients.add',$data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store_record(Request $request)
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
            $patient = patients::where('pin', $pin)->first();
            if(!empty($request->input('temprature'))){
            $patient->temp = $request->input('temprature');
             }
             if(!empty($request->input('height'))){
             $patient->height = $request->input('height');
             }
             if(!empty($request->input('weight'))){
             $patient->weight = $request->input('weight');
             }
             if($request->input('genotype')!== 'seect'){
             $patient->genotype = $request->input('genotype');
             }
             if(!empty($request->input('h_rate'))){
             $patient->h_rate = $request->input('h_rate');
             }
             if(!empty($request->input('bp'))){
             $patient->bp = $request->input('bp');
             }
             //$patient->pin = $pin;
             if($request->input('b_group') !== 'seect'){
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
        
        $user = User::find($id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       $data = array(
                'user' => $user,
                'new_messages' => $new_messages
       );

        return view('edituser', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_drug()
    {
        $id = $_POST['id'];
        $drug = pharmacy::find($id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       $data = array(
                'drug' => $drug,
                'new_messages' => $new_messages
       );

        return view('patients.editdrug', $data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_drug()
    {
        $id = $_POST['id'];
        $drug = pharmacy::find($id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       $data = array(
                'drug' => $drug,
                'new_messages' => $new_messages
       );

        return view('patients.drug', $data);
    }


    
    public function status_change()
    {
    $id = $_POST['id'];
      $drug = pharmacy::find($id);
      $drug->status = 'Out Of Stock';
      $drug->save();
      //$patient->status = 'pending';
       return redirect()->back()->with('success', 'Great!, drug details updated.');//I just set the message for session(success).

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
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
        ]);
      //Handle file upload
      if($request->hasFile('img')){
        $filenameWithExt = $request->file('img')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          $extension = $request->file('img')->getClientOriginalExtension();
          $fileNameTostore = $request->input('name').'_'.time().'.'.$extension;
          $path = $request->file('img')->move('img/drugs', $fileNameTostore);
            }
      $drug = pharmacy::find($id);
    
      $drug->name = $request->input('name');
     //This will get the user input for title
    if($request->hasFile('img')){
      $drug->img = $fileNameTostore;
    }
      $drug->price = $request->input('price');
      $drug->category = $request->input('category');
      $drug->status = $request->input('status');
      $drug->save();
      //$patient->status = 'pending';
       return redirect('/pharmacy')->with('success', 'Great!, drug details updated.');//I just set the message for session(success).

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_drug()
    {
                $id = $_POST['id'];
               $drug = pharmacy::find($id);
              $drug->delete();
              return redirect('/pharmacy')->with('success', 'Drug Deleted From Our Records.');
        
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       // //
       $email = $_POST['email'];
      $user = patients::find($id);
      if (!empty(User::where('email', $email)->first())) {
        $user2 = User::where('email', $email)->first();
        $user2->delete();
      }

     // if($user->img != '1.jpg'){
       //Delete image
      // unlink(public_path().'/img/cover_img/'.$user->img);
  // }
      
              //check correct user (this will restrict destroy access only to the post owner)
             // if(auth()->user()->id !==$post->user_id){
               //   return redirect('/posts')->with('error', 'Unauthorized page.');
              //}
              $user->delete();
              return redirect('/patients')->with('success', 'User Record Deleted');
        
   }

}
