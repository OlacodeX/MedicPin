<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
       $this->middleware('auth', ['except' => ['index']]);
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
        return view("pro")->with('pro',$pro);
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

        return view('edituser')->with('user', $user);
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
