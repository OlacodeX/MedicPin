<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Messages;
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

    public function reachout(){
        return view("pages.contact");
    }
    public function hireus(){
        return view("pages.hireform");
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
