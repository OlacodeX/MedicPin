<?php

namespace App\Http\Controllers;

use  App\Notifications;
use App\Questions;
use Illuminate\Http\Request;
use App\Bills;
use App\User;
use App\HospitalDoctors;
use Illuminate\Support\Facades\Hash;
use App\Messages;
use App\patients;
use App\Orders;
use App\Wards;
use Image;
use App\pharmacy;
use App\Laboratories;
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
       $this->middleware('auth', ['except' => ['index','reg_patient','complete_sign_up','complete_sign_up_patient','sign_up','contact','blog','faqs','out_breaks','symptoms_checker','terms','privacy','about']]);
   } 
    //
    public function index(){
        return view('pages.index1');//here i can return any page i want.
    }
    public function home(){
        return redirect('dashboard');//here i can return any page i want.
    }
    public function about(){
        return view('pages.about');//here i can return any page i want.
    }
    public function privacy(){
        return view('pages.privacy');//here i can return any page i want.
    }
    public function terms(){
        return view('pages.terms');//here i can return any page i want.
    }
    public function symptoms_checker(){
        return view('pages.symptoms_checker');//here i can return any page i want.
    }
    public function out_breaks(){
        return view('pages.out-breaks');//here i can return any page i want.
    }
    public function faqs(){
        return view('pages.faqs');//here i can return any page i want.
    }
    public function contact(){
        return view('pages.contact');//here i can return any page i want.
    }
    public function blog(){
        return view('pages.blog');//here i can return any page i want.
    }
    public function bills(){

        $bills = Bills::where('patient_pin', auth()->user()->pin)->/*whereDay('created_at', now()->day)*/where('status', 'Unpaid')->orderBy('created_at', 'desc')->get();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'bills' => $bills,
            'new_messages' => $new_messages
   );
        return view("pages.bills",$data);
    }
    public function wards(){
        return view('pages.wards');//here i can return any page i want.
    }
    public function create_ward(){
        return view('pages.create_ward');//here i can return any page i want.
    }
    public function create_lab(){
        return view('pages.create_lab');
    }
    public function my_lab(){
        return view('pages.lab');
    }
    
  
    public function Transaction(Request $request){ /** Prepare the post data to be sent via request
        * @param array data
        * @return post response
        */

       $data1 = [

           'amount' => ($request->input('amount')) * 100,
           'address' => ($request->input('address')),
           'item' => ($request->input('item')),

           'user' => auth()->user()->name,

           'email' => auth()->user()->email,

           'callback_url' => '/paidfull'
           ];

           /** Initiate the client for url's */
           $curl = curl_init();

           /** Curl array values to be passed */
           curl_setopt_array($curl, array(

           /** The url to visit and get response from */
           CURLOPT_URL => "https://api.paystack.co/transaction/initialize",

           /** The curl options should have return transfer values */
           CURLOPT_RETURNTRANSFER => true,

           /** Specify the encoding if necessary: omitted here */
           CURLOPT_ENCODING => "",

           /** The maximum redirect the link can have */
           CURLOPT_MAXREDIRS => 10,

           /** The time out for the load time can be set here */
           CURLOPT_TIMEOUT => 30000,

           /** The version for the curl can be set here */
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

           /** The request being sent to the endpoint is a POST request */
           CURLOPT_CUSTOMREQUEST => "POST",

           /** The fields returned should be json encoded */
           CURLOPT_POSTFIELDS => json_encode($data1),

           CURLOPT_HTTPHEADER => array(

           /** The headers for the curl array can be set here: Auth_key */

           "accept: */*",

           "authorization: Bearer sk_test_e09c42e4832c94d669d14a1d0d79de75dc6d72b7",

           "accept-language: en-US,en;q=0.8",

           "content-type: application/json",

           ),

           ));

           /** The response gotten from the client for urls */
           $response = curl_exec($curl);

           /** If errors exist then return the error messages */
           $err = curl_error($curl);

           /** Close the connection to the end point once done */
           curl_close($curl);

           /** If there are errors then echo them out  */
           if ($err) {

           return redirect()->back()->with("cURL Error #:" . $err);

           } else {

           /** This should send the data from the Callback with transaction details */
           $trans = json_decode($response, true);
           return redirect($trans['data']['authorization_url']);

           }
       }


    /** 
    * Controller method to handle response from paystack after payment
    * @param trxref
    */
    public function Callback(){
        //$getLocation = Order::orderBy('created_at', 'desc')->where('user',auth()->user()->name)->limit(1)->get();

/** Initialize the client for urls */
$curl = curl_init();

/** Check for a reference and return else make empty */
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
die('No reference supplied');
}

/** Set the client for url's array values for the Curl's */
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
CURLOPT_RETURNTRANSFER => true,

/** Set the client for url header values passed */
CURLOPT_HTTPHEADER => [
"accept: application/json",
"authorization: Bearer sk_test_e09c42e4832c94d669d14a1d0d79de75dc6d72b7",
"cache-control: no-cache"
],
));

/** The response should be executed if successful */
$response = curl_exec($curl);

/** If there's an error return the error message */
$err = curl_error($curl);

if($err){
print_r('Api returned error'. $err);
}

/** The transaction details and stats would be returned */
$trans = json_decode($response);
if(!$trans->status){
die('Api returned Error'. $trans->message);
}

/** If the transaction stats are successful snd to DB */
if('success' == $trans->data->status){
$payment = new Orders;
$payment->channel = $trans->data->channel;
$payment->status  = $trans->data->status;
$payment->item  = $trans->data->item;
$payment->address  = $trans->data->address;
$payment->amount   = ($trans->data->amount)/100;
$payment->reference = $trans->data->reference;
$payment->transaction_date = $trans->data->transaction_date;
$payment->user_pin = auth()->user()->pin;
$payment->user_email = auth()->user()->email;
$payment->save();  
}

/** Finally return the callback view for the end user */
return redirect()->back();
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
       $age = $_POST['age'];
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
                'age' => $age,
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
        public function store_lab(Request $request)
        {
            // 
            $this->validate($request, [
                'name' => 'nullable',
                'add' => 'nullable',
                ]);  
                $lab = new Laboratories;
                $lab->name = $request->input('name');
                $lab->add = $request->input('add');
                $lab->created_by = auth()->user()->pin;
                $lab->save();
                return redirect()->back()->with('success', 'Laboratory Created!');
    
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
            'about' => ['nullable', 'string', 'max:500'],
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
        $user->children = $request->input('children');
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
        $user->about = $request->input('about');
        $user->email = $request->input('email');
        $user->p_number = $request->input('phone');
        $user->cc = $request->input('cc');
        $user->gender = $request->input('gender');
        $user->role = $request->input('role');
        $user->type = $request->input('type');
        $user->twitter = $request->input('twitter');
        $user->facebook = $request->input('facebook');
        $user->children = $request->input('children');
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
        public function search_drug()
        {
            $drug = $_POST['name'];
            $drugs = pharmacy::orderBy('created_at', 'desc')->orderBy('status', 'asc')->where('name', $drug)->paginate(10);
            return view("pages.search_result")->with('drugs', $drugs);
        }
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
public function search_patient()
{
    $pin = $_POST['pin'];
    $patient = patients::where('pin', $pin)->first();
    $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
  
    $data = array(
        'patient' => $patient,
        'new_messages' => $new_messages
);
    return view("pages.search_reult", $data);
}

}
