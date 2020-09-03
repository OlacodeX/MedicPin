<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\HospitalDoctors;
use App\Messages;
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
       $this->middleware('auth', ['except' => ['index','reg_patient']]);
   } 
    //
    public function index(){
       // $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        //$portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(12);

       // $data = array(
         //   'posts' => $posts,
           // 'portfolios' => $portfolios
        //);
        return view('pages.home');//here i can return any page i want.
    }
     
    public function reg_patient(){
       
        return view("auth.registerpatient");
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
            'name' => 'nullable',
            'twitter' => 'nullable',
        ]); 
        $id=$_POST['id'];
        $user = User::find($id);
        $user->name = $request->input('name');//This will get the user input for title
        $user->email = $request->input('email');
        //Save to db
        $user->save();
        //print success message and redirect
        return redirect('/dashboard')->with('success', 'Profile Updated');//I just set the message for session(success).

    }
}
