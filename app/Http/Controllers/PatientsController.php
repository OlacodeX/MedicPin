<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\patientMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\patients;
use App\User;
class PatientsController extends Controller
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
        $users = patients::where('doc_email', auth()->user()->email)->paginate(100);
        return view("patients.list")->with('users', $users);
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
               ///$fileNameTostoreone = 'share3.png';
            ///}
            $pin = 'MP'.mt_rand(99999, 100000);
            $patient = new patients;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reg_patient(Request $request)
    {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);
        $user = new User;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password =  Hash::make($request->input('password'));
        
        //Save to db
        $user->save();
        $update_patient = patients::where('email', $email)->first();
        $update_patient->username = $username;
        //Save to db
        $update_patient->save();
        //print success message and redirect
        return redirect('./login');//I just set the message for session(success).

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
        $pin = $_POST['pin'];
        return view('patients.add')->with('pin',$pin);
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

        return view('edituser')->with('user', $user);
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
