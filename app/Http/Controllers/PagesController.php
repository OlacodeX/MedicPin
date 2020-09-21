<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\HospitalDoctors;
use Illuminate\Support\Facades\Hash;
use App\Messages;
use App\patients;
use App\Wards;
use Image;
use Yabacon\Paystack;
use App\Mail\BloodRequestMail;
use Illuminate\Support\Facades\Mail;
//use App\Contact;

class PagesController extends Controller
{

     /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth', ['except' => ['index','reg_patient','complete_sign_up','complete_sign_up_patient','sign_up']]);
   } 
    //
    public function index(){
        return view('pages.home');//here i can return any page i want.
    }
    public function wards(){
        return view('pages.wards');//here i can return any page i want.
    }
    public function create_ward(){
        return view('pages.create_ward');//here i can return any page i want.
    }
    public function payment(){
        $amount = $_POST['amount'];
        $email = auth()->user()->email;
        $paystack = new \Yabacon\Paystack('sk_test_e09c42e4832c94d669d14a1d0d79de75dc6d72b7');
        try
        {
          $tranx = $paystack->transaction->initialize([
            'amount'=>$amount,       // in kobo
            'email'=>$email,         // unique to customers
            //'reference'=>$reference, // unique to transactions
          ]);
        } catch(\Yabacon\Paystack\Exception\ApiException $e){
          print_r($e->getResponseObject());
          die($e->getMessage());
        }
    
        // store transaction reference so we can query in case user never comes back
        // perhaps due to network issue
        //save_last_transaction_reference($tranx->data->reference);
    
        // redirect to page so User can pay
        header('Location: ' . $tranx->data->authorization_url);
        // Retrieve the request's body and parse it as JSON
    $event = \Yabacon\Paystack\Event::capture();
    http_response_code(200);

    /* It is a important to log all events received. Add code *
     * here to log the signature and body to db or file       */
    openlog('MyPaystackEvents', LOG_CONS | LOG_NDELAY | LOG_PID, LOG_USER | LOG_PERROR);
    syslog(LOG_INFO, $event->raw);
    closelog();

    /* Verify that the signature matches one of your keys*/
    $my_keys = [
                //'live'=>'sk_live_blah',
                'test'=>'sk_test_e09c42e4832c94d669d14a1d0d79de75dc6d72b7',
              ];
    $owner = $event->discoverOwner($my_keys);
    if(!$owner){
        // None of the keys matched the event's signature
        die();
    }

    // Do something with $event->obj
    // Give value to your customer but don't give any output
    // Remember that this is a call from Paystack's servers and
    // Your customer is not seeing the response here at all
    switch($event->obj->event){
        // charge.success
        case 'charge.success':
            if('success' === $event->obj->data->status){
                // TIP: you may still verify the transaction
                // via an API call before giving value.
            }
            break;
    }
    $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
    if(!$reference){
      die('No reference supplied');
    }

    // initiate the Library's Paystack Object
    $paystack = new Yabacon\Paystack(SECRET_KEY);
    try
    {
      // verify using the library
      $tranx = $paystack->transaction->verify([
        'reference'=>$reference, // unique to transactions
      ]);
    } catch(\Yabacon\Paystack\Exception\ApiException $e){
      print_r($e->getResponseObject());
      die($e->getMessage());
    }

    if ('success' === $tranx->data->status) {
      // transaction was successful...
      // please check other things like whether you already gave value for this ref
      // if the email matches the customer who owns the product etc
      // Give value
      return redirect('/dashboard')->with('success', 'Great!, patient has been added and notified.');
    }
    }
    
    public function reg_patient(){
       
        return view("auth.registerpatient");
    }
    public function complete_sign_up(){
       $name = $_POST['name'];
       $password = $_POST['password'];
       $email = $_POST['email'];
       $cc = $_POST['cc'];
       $age = $_POST['age'];
       $phone = $_POST['phone'];
       //$type = $_POST['type'];
       $gender = $_POST['gender'];
       $password_confirmation = $_POST['password_confirmation'];
       if (!empty(User::where('email', $email)->first())) {
           return redirect()->back()->with('error','Sorry,Email taken by another user!');
       }
       elseif (strlen($password) < '8') {
           return redirect()->back()->with('error','Password length should be minimum of 8 characters!');
       }
       elseif ($password !== $password_confirmation) {
           return redirect()->back()->with('error','Password and Confirm password not the same!');
       }
       else{
       $data = array(
                'name' => $name,
                'password' => $password,
                'cc' => $cc,
                'age' => $age,
                'phone' => $phone,
                //'type' => $type,
                'email' => $email,
                'gender' => $gender,
                'password_confirmation' => $password_confirmation
       );
        return view("auth.completeregi", $data);
    }
    }
    public function complete_sign_up_patient(){
       $name = $_POST['name'];
       $password = $_POST['password'];
       $email = $_POST['email'];
       $cc = $_POST['cc'];
       $type = $_POST['type'];
       $phone = $_POST['phone'];
       $username = $_POST['username'];
       $gender = $_POST['gender'];
       $password_confirmation = $_POST['password_confirmation'];
       if (!empty(User::where('email', $email)->first())) {
           return redirect()->back()->with('error','Sorry,Email taken by another user!');
       }
       elseif (strlen($password) < '8') {
           return redirect()->back()->with('error','Password length should be minimum of 8 characters!');
       }
       elseif ($password !== $password_confirmation) {
           return redirect()->back()->with('error','Password and Confirm password not the same!');
       }
       else{
       $data = array(
                'name' => $name,
                'password' => $password,
                'email' => $email,
                'gender' => $gender,
                'cc' => $cc,
                'type' => $type,
                'phone' => $phone,
                'username' => $username,
                'password_confirmation' => $password_confirmation
       );
        return view("auth.completeregi_patient", $data);
    }
    }
    //new reg function
    public function sign_up(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'/***, 'unique:users' */],
            'password' => ['required', 'string'/***, 'min:8', 'confirmed' */],
            'role' => ['required', 'string', 'max:255'],
            'pp' => ['nullable', 'max:2000'],
            'gender' => ['nullable', 'string', 'max:255'],
            'expertise' => ['nullable', 'string', 'max:255'],
            //'twitter' => ['nullable', 'string', 'max:255'],
            //'facebook' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'cc' => ['nullable', 'string', 'max:255'],
        ]);
      
    $pin1 = mt_rand(9, 10) + time();
        
    $pin = 'MP'.($pin1 + 73);

    if(!empty($data['pp'])){
        //Get file name with the extension
       $filenameWithExt = $data['pp']->getClientOriginalName();
        //get just file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // Get just Ext
        $extension = $data['pp']->getClientOriginalExtension();

        // File name to store
        $fileNameTostore = $filename.'_'.time().'.'.$extension;

        // Upload Image
        $path = $data['pp']->move('img/profile', $fileNameTostore);

        // crop image
        /*** 
        $img = Image::make(public_path('img/profile/'.$filenametostore));
        $croppath = public_path('img/profile/crop/'.$filenametostore);
 
        $img->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
        $img->save($croppath);
 
        // you can save crop image path below in database
        $path = asset('img/profile/crop/'.$filenametostore);*/
    }
   else{
        //default image for post if none was choosed
      $fileNameTostore = '1.jpeg';
   }
    //$patient = patients::where('email', $email)->first();
    //$update_patient->pin = $pin;
    if (!empty(User::where('email', $request->input('email'))->first())) {
        return view('auth.register')->with('error','Sorry,Email taken by another user!');
    }
    if (strlen($request->input('password')) > '8') {
        return view('auth.register')->with('error','Password length should be minimum of 8 characters!');
    }
    if ($request->input('password') !== $request->input('password_confirmation')) {
        return view('auth.register')->with('error','Password and Confirm password not the same!');
    }
    else{
    $user = new User;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->p_number = '(+'.$request->input('cc').')'.$request->input('phone');
    $user->gender = $request->input('gender');
    $user->role = $request->input('role');
    $user->type = $request->input('type');
    $user->nhis = $request->input('nhis');
    $user->expertise = $request->input('expertise');
    $user->pin = $pin;
    $user->img = $fileNameTostore;
    $user->password =  Hash::make($request->input('password'));
    //Save to db
    $user->save();
    //print success message and redirect
    return redirect('./login');//I just set the message for session(success).
}
    
    }
    public function doctors(){
       if (auth()->user()->role == 'Doctor') {

        $doctors = HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', 'Doctor')->get();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'doctors' => $doctors,
            'new_messages' => $new_messages
   );
        return view("pages.doctors",$data);
       }
       if (auth()->user()->role == 'Nurse') {

        $doctors = HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', 'Nurse')->get();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'doctors' => $doctors,
            'new_messages' => $new_messages
   );
        return view("pages.doctors",$data);
       }
    }


    public function send_request_mail(Request $request){
        $data = request()->validate([
            'b_group' => 'required',
            'qty' => 'required',
            'result' => 'required',
            'name' => 'required',
            'h_name' => 'required',
            'add' => 'required',
            'number' => 'required',
            'email' => 'required',
            //'sender' => auth()->user()->u_name,
        ]);
            
     Mail::to($request->input('email'))->send(new BloodRequestMail($data));
     return redirect()->back()->with('success', 'Request sent');
    }
    public function blood_bank(){
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
           // 'pro' => $pro,
            'new_messages' => $new_messages
   );
        return view("pages.bank",$data);
    }
    public function pro(){
        $pro = User::find(auth()->user()->id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'pro' => $pro,
            'new_messages' => $new_messages
   );
        return view("pro",$data);
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
        $user = User::find($id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        $data = array(
            'user' => $user,
            'new_messages' => $new_messages
   );
        return view('edituser', $data);
    }
    
    public function store_ward(Request $request)
    {
        // 
        $this->validate($request, [
            'name' => 'nullable',
            ]);  
            $ward = new Wards;
            $ward->name = $request->input('name');
            $ward->status = 'Available';
            $ward->hospital = auth()->user()->h_id;
            $ward->save();
            return redirect()->back()->with('success', 'Ward Created!');

        }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'/***, 'unique:users' */],
            'role' => ['required', 'string', 'max:255'],
            'pp' => ['nullable', 'max:2000'],
            'gender' => ['nullable', 'string', 'max:255'],
            'expertise' => ['nullable', 'string', 'max:255'],
            'twitter' => ['nullable', 'string', 'max:255'],
            'facebook' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'cc' => ['nullable', 'string', 'max:255'],
        ]); 
        $id=$_POST['id'];
        if (auth()->user()->role == 'Patient') {
        $patient = patients::where('pin', auth()->user()->pin)->first();
        $patient->name = $request->input('name');
        $patient->email = $request->input('email');
        $patient->phone = $request->input('phone');
        $patient->cc = $request->input('cc');
        $patient->gender = $request->input('gender');
        $patient->address = $request->input('add');
        $patient->username = $request->input('username');
        $patient->occupation = $request->input('occupation');
        $patient->nok_relation = $request->input('nok_relation');
        $patient->nok = $request->input('nok');
        $patient->nok_phone = $request->input('nokp');
        $patient->save();
        $user = User::where('id',$id)->first(); //Handle file upload
        if($request->hasFile('pp')){
          $filenameWithExt = $request->file('pp')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('pp')->getClientOriginalExtension();
            $fileNameTostore = $request->input('name').'_'.time().'.'.$extension;
            $path = $request->file('pp')->move('img/profile', $fileNameTostore);
              }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->p_number = $request->input('phone');
        $user->cc = $request->input('cc');
        $user->gender = $request->input('gender');
        $user->role = $request->input('role');
        $user->type = $request->input('type');
        $user->twitter = $request->input('twitter');
        $user->facebook = $request->input('facebook');
        $user->nhis = $request->input('nhis');
        $user->expertise = $request->input('expertise');
        if($request->hasFile('pp')){
        $user->img = $fileNameTostore;
        }
        //Save to db
        $user->save();
        
    }
    else{
        $user = User::where('id',$id)->first(); //Handle file upload
        if($request->hasFile('pp')){
          $filenameWithExt = $request->file('pp')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('pp')->getClientOriginalExtension();
            $fileNameTostore = $request->input('name').'_'.time().'.'.$extension;
            $path = $request->file('pp')->move('img/profile', $fileNameTostore);
              }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->p_number = $request->input('phone');
        $user->cc = $request->input('cc');
        $user->gender = $request->input('gender');
        $user->role = $request->input('role');
        $user->type = $request->input('type');
        $user->twitter = $request->input('twitter');
        $user->facebook = $request->input('facebook');
        $user->nhis = $request->input('nhis');
        $user->expertise = $request->input('expertise');
        if($request->hasFile('pp')){
        $user->img = $fileNameTostore;
        }
        //Save to db
        $user->save();
        

    }
        //print success message and redirect
        return redirect('/dashboard')->with('success', 'Profile Updated');//I just set the message for session(success).

    }

    public function update_ward(Request $request){
        $this->validate($request, [
            'status' => 'nullable',
        ]);
          $ward = Wards::where('id', $request->input('id'))->first();
          $ward->status = $request->input('status');
          $ward->save();
     return redirect()->back()->with('success', 'Ward details updated successfully');
    }
    /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function search()
        {
            $pin = $_POST['pin'];
            $user = patients::where('doc_email', auth()->user()->email)->where('pin', $pin)->first();
            $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
          
            if (empty($user)) {
                return redirect('/dashboard')->with('error', 'No user with this pin.');//I just set the message for session(success).
   
            } else{
            $data = array(
                'user' => $user,
                'new_messages' => $new_messages
       );
            return view("patients.search_result", $data);
        }
    }
}
