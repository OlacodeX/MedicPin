<?php

namespace App\Http\Controllers;

use App\Messages;
use App\patients;
use App\HMO;
use App\User;
use App\ORG;
use App\Bills;
use App\hmo_cat;
use App\hmo_h;
use App\hmo_p;
use App\hospitals;
use App\Mail\PaymentRequestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HmoController extends Controller
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

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        $email = $_POST['email'];
        
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'email' => $email,
            'new_messages' => $new_messages
   );
        return view("pages.hmo", $data);


    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buy_hmo()
    {
        //
       // $email = $_POST['email'];
        
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            //'email' => $email,
            'new_messages' => $new_messages
   );
        return view("pages.hmo", $data);


    }
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_cat()
    {
        //
       // $email = $_POST['email'];
        
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            //'email' => $email,
            'new_messages' => $new_messages
   );
        return view("pages.createcat", $data);


    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function complete_add()
    {
        //
        $email = $_POST['email'];
        $hmo = $_POST['hmo'];
        $hmo_cats = hmo_cat::where('HMO', $hmo)->get();
        $packages = HMO::where('hmo', $hmo)->get();
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
      
        $data = array(
            'email' => $email,
            'hmo' => $hmo,
            'hmo_cats' => $hmo_cats,
            'packages' => $packages,
            'new_messages' => $new_messages
   );
        return view("pages.hmocat", $data);
      
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function get_cat()
   {
       //
       $email = $_POST['email'];
       $hmo = $_POST['hmo'];
       $category = $_POST['category'];
       $hmo_cats = hmo_cat::where('HMO', $hmo)->get();
       $packages = HMO::where('hmo', $hmo)->where('cat_id', $category)->get();
       $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
     
       $data = array(
           'email' => $email,
           'hmo' => $hmo,
           'hmo_cats' => $hmo_cats,
           'packages' => $packages,
           'category' => $category,
           'new_messages' => $new_messages
  );
       return view("pages.hmocom", $data);
     
   }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function staff_list()
    {
        $users = ORG::orderBy('created_at', 'desc')->where('org_id', auth()->user()->id)->paginate(100);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = array(
            'users' => $users,
            'new_messages' => $new_messages
   );
        return view("pages.index", $data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
            $data = array(
                'id' => $id,
                'new_messages' => $new_messages
       );
            return view("pages.create", $data);
    
        } else {
        
            $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
            return view("pages.create")->with('new_messages', $new_messages);
    
        }
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_staff()
    {
        //
        
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        return view("pages.createe")->with('new_messages', $new_messages);

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
    public function store_add(Request $request)
    {
        //
        $this->validate($request, [
            'email' => 'nullable',
            'hmo' => 'nullable',
            'package' => 'nullable',
             ]);
             if (!empty($request->input('category'))) {
                 $get_user = hmo_p::where('user_name', $request->input('email'))->first();
                 if (!empty($get_user)) {
                    $value = HMO::where('id', $request->input('package'))->first();
                    $get_user->package_on = $request->input('package');
                    $get_user->hmo = $request->input('hmo');
                    $get_user->cat_id = $request->input('category');
                    $get_user->package_value = $value->description;
                   $get_user->save();
                   $bill = new Bills;
                   $user = User::where('email', $request->input('email'))->first();
                   $bill->patient_name = auth()->user()->hmo_org_name;
                   $bill->patient_pin = auth()->user()->pin;
                   $bill->service = 'HMO plan purchase';
                   $bill->status = 'Unpaid';
                   $bill->amount = $value->price;
                   $bill->action_by = auth()->user()->pin;
                   $bill->save();
                   $update_user = User::where('email', $request->input('email'))->first();
                   if(!empty($update_user)){
                       $update_user->package_value = $value->description;
                       $update_user->hmo_package = $request->input('package');
                       $update_user->save();
                   }
                 } else {
                    $user = new hmo_p;
                    $value = HMO::where('id', $request->input('package'))->first();
                    $detail = ORG::where('email', $request->input('email'))->first();
                    $user->user_name = $request->input('email');
                    $user->package_on = $request->input('package');
                    $user->hmo = $request->input('hmo');
                    $user->cat_id = $request->input('category');
                    $user->package_value = $value->description;
                    $user->added_by = auth()->user()->id;
                   $user->save();
                   $bill = new Bills;
                   $user = User::where('email', $request->input('email'))->first();
                   $bill->patient_name = auth()->user()->hmo_org_name;
                   $bill->patient_pin = auth()->user()->pin;
                   $bill->service = 'HMO plan purchase';
                   $bill->status = 'Unpaid';
                   $bill->amount = $value->price;
                   $bill->action_by = auth()->user()->pin;
                   $bill->save();
                   $update_user = User::where('email', $request->input('email'))->first();
                   if(!empty($update_user)){
                       $update_user->package_value = $value->description;
                       $update_user->hmo_package = $request->input('package');
                       $update_user->save();
                   }
                 }
             } else {
                $get_user = hmo_p::where('user_name', $request->input('email'))->first();
                if (!empty($get_user)) {
                    $value = HMO::where('id', $request->input('package'))->first();
                   $get_user->package_on = $request->input('package');
                   $get_user->hmo = $request->input('hmo');
                   $get_user->cat_id = $request->input('category');
                   $get_user->package_value = $value->description;
                  $get_user->save();
                  $bill = new Bills;
                  $user = User::where('email', $request->input('email'))->first();
                  $bill->patient_name = auth()->user()->hmo_org_name;
                  $bill->patient_pin = auth()->user()->pin;
                  $bill->service = 'HMO plan purchase';
                  $bill->status = 'Unpaid';
                  $bill->amount = $value->price;
                  $bill->action_by = auth()->user()->pin;
                  $bill->save();
                  $update_user = User::where('email', $request->input('email'))->first();
                  if(!empty($update_user)){
                      $update_user->package_value = $value->description;
                      $update_user->hmo_package = $request->input('package');
                      $update_user->save();
                  }
                } else {
                    $value = HMO::where('id', $request->input('package'))->first();
                   $user = new hmo_p;
                   $detail = ORG::where('email', $request->input('email'))->first();
                   $user->user_name = $request->input('email');
                   $user->package_on = $request->input('package');
                   $user->hmo = $request->input('hmo');
                   $user->cat_id = $request->input('category');
                   $user->package_value = $value->description;
                   $user->added_by = auth()->user()->id;
                  $user->save();
                  $bill = new Bills;
                  $user = User::where('email', $request->input('email'))->first();
                  $bill->patient_name = auth()->user()->hmo_org_name;
                  $bill->patient_pin = auth()->user()->pin;
                  $bill->service = 'HMO plan purchase';
                  $bill->status = 'Unpaid';
                  $bill->amount = $value->price;
                  $bill->action_by = auth()->user()->pin;
                  $bill->save();
                  $update_user = User::where('email', $request->input('email'))->first();
                  if(!empty($update_user)){
                      $update_user->package_value = $value->description;
                      $update_user->hmo_package = $request->input('package');
                      $update_user->save();
                  }
                }
               
             }
             if (auth()->user()->email == $request->input('email')) {
              
                return redirect('./dashboard')->with('success', 'Great!, HMO purchase successful.');//I just set the message for session(success).
         
             } else {
              
                return redirect('./staff_list')->with('success', 'Great!, staff added to package successfully.');//I just set the message for session(success).
         
             }
             
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function payment_request(Request $request)
    {
        //
        $this->validate($request, [
            'pin' => 'nullable',
             ]);
             $pin = $_GET['pin'];
             $user = User::where('pin', $pin)->first();
             $hmo = User::where('id', $user->hmo)->first();

             $bills = Bills::where('patient_pin', $pin)->whereDay('created_at', now()->day)->get();
             foreach ($bills as $bills) {
                 $bills->patient_pin = $hmo->pin;
                 $bills->patient_name = $hmo->hmo_org_name;
                 $bills->inherited_from = $pin;
                 $bills->save();
             }
             Mail::to($hmo->email)->send(new PaymentRequestMail(auth()->user()->pin));
             return redirect()->back()->with('success','Great!, Your HMO has been notified of your claims request');
             
    }


/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_cat(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'nullable',
            'img' => 'nullable|max:3000',
             ]);
             $cat = new hmo_cat;
             
             if($request->hasFile('img')){
                //Get file name with the extension
               $filenameWithExt = $request->file('img')->getClientOriginalName();
                //get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
                // Get just Ext
                $extension = $request->file('img')->getClientOriginalExtension();
        
                // File name to store
                $fileNameTostore = auth()->user()->hmo_org_name.'_'.$request->input('name').'.'.$extension;
        
                // Upload Image
                $path = $request->file('img')->move('img/hmo/cat', $fileNameTostore);
        
                // crop image
                /*** 
                $img = Image::make(public_path('img/profile/'.$filenametostore));
                $croppath = public_path('img/profile/crop/'.$filenametostore);
         
                $img->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
                $img->save($croppath);
         
                // you can save crop image path below in database
                $path = asset('img/profile/crop/'.$filenametostore);*/
                $cat->img = $fileNameTostore;
            }
        
             $cat->name = $request->input('name');
             $cat->HMO = auth()->user()->id;
            $cat->save();
            return redirect()->back()->with('success', 'Great!, category added successfully, kindly add packages to category.');//I just set the message for session(success).
     
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
            'img' => 'nullable|max:3000',
             ]);
             if (!empty($request->input('id'))) {
                $package = new HMO;
                $package->name = $request->input('name');
                $package->price = $request->input('price');
                $package->cat_id = $request->input('id');
                $package->description = $request->input('value');
                $package->hmo = auth()->user()->id;
                
             
             if($request->hasFile('img')){
                //Get file name with the extension
               $filenameWithExt = $request->file('img')->getClientOriginalName();
                //get just file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
                // Get just Ext
                $extension = $request->file('img')->getClientOriginalExtension();
        
                // File name to store
                $fileNameTostore = auth()->user()->hmo_org_name.'_'.$request->input('name').'.'.$extension;
        
                // Upload Image
                $path = $request->file('img')->move('img/hmo/packages', $fileNameTostore);
        
                // crop image
                /*** 
                $img = Image::make(public_path('img/profile/'.$filenametostore));
                $croppath = public_path('img/profile/crop/'.$filenametostore);
         
                $img->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
                $img->save($croppath);
         
                // you can save crop image path below in database
                $path = asset('img/profile/crop/'.$filenametostore);*/
                $package->img = $fileNameTostore;
            }
               $package->save();
             } else {
                $package = new HMO;
                $package->name = $request->input('name');
                $package->price = $request->input('price');
                $package->description = $request->input('value');
                $package->hmo = auth()->user()->id;
                
             
                if($request->hasFile('img')){
                   //Get file name with the extension
                  $filenameWithExt = $request->file('img')->getClientOriginalName();
                   //get just file name
                   $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
           
                   // Get just Ext
                   $extension = $request->file('img')->getClientOriginalExtension();
           
                   // File name to store
                   $fileNameTostore = auth()->user()->hmo_org_name.'_'.$request->input('name').'.'.$extension;
           
                   // Upload Image
                   $path = $request->file('img')->move('img/hmo/packages', $fileNameTostore);
           
                   // crop image
                   /*** 
                   $img = Image::make(public_path('img/profile/'.$filenametostore));
                   $croppath = public_path('img/profile/crop/'.$filenametostore);
            
                   $img->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
                   $img->save($croppath);
            
                   // you can save crop image path below in database
                   $path = asset('img/profile/crop/'.$filenametostore);*/
                   $package->img = $fileNameTostore;
               }
               $package->save();
             }
             
            return redirect()->back()->with('success', 'Great!, package created.');//I just set the message for session(success).
     
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_staff(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'nullable',
            'email' => 'nullable',
            'address' => 'nullable',
             ]);
             if(!empty($request->input('pin'))){
                 $staff = User::where('pin',$request->input('pin'))->first();

                 if (!empty($staff)) {
                    $org = new ORG;
                    $org->name = $staff->name;
                    $org->email = $staff->email;
                    $org->address = $request->input('address');
                    $org->org_id = auth()->user()->id;
                    $org->save();
                    $staff->org = auth()->user()->id;
                    $staff->save();
    
                 }

                 else{
                     return redirect()->back()->with('error', 'No user with this pin in our records!');
                 }
             }
             else{
                $org = new ORG;
                $org->name = $request->input('name');
                $org->email = $request->input('email');
                $org->address = $request->input('address');
                $org->org_id = auth()->user()->id;
                $org->save();
            }
              
            return redirect()->back()->with('success', 'Great!, staff member added.');//I just set the message for session(success).
     
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
        $cat = hmo_cat::find($id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       $data = array(
                'cat' => $cat,
                'new_messages' => $new_messages
       );

        return view('pages.editcat', $data);
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
            'name' => 'nullable',
            ]);  
            $cat = hmo_cat::find($id);
             
            if($request->hasFile('img')){
               //Get file name with the extension
              $filenameWithExt = $request->file('img')->getClientOriginalName();
               //get just file name
               $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
       
               // Get just Ext
               $extension = $request->file('img')->getClientOriginalExtension();
       
               // File name to store
               $fileNameTostore = auth()->user()->hmo_org_name.'_'.$request->input('name').'.'.$extension;
       
               // Upload Image
               $path = $request->file('img')->move('img/hmo/cat', $fileNameTostore);
       
               // crop image
               /*** 
               $img = Image::make(public_path('img/profile/'.$filenametostore));
               $croppath = public_path('img/profile/crop/'.$filenametostore);
        
               $img->crop($request->input('w'), $request->input('h'), $request->input('x1'), $request->input('y1'));
               $img->save($croppath);
        
               // you can save crop image path below in database
               $path = asset('img/profile/crop/'.$filenametostore);*/
               $cat->img = $fileNameTostore;
           }
       
            $cat->name = $request->input('name');
            //$cat->HMO = auth()->user()->id;
           $cat->save();
           return redirect()->back()->with('success', 'Great!, category updated successfully.');//I just set the message for session(success).
    

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
        $staff = ORG::find($id);
        $staff_medicpin = User::where('email',$staff->email)->first();
        if (!empty($staff_medicpin)) {
            $staff_medicpin->org = NULL;
            $staff_medicpin->save();
        }
        $staff->delete();
         return redirect()->back()->with('success', 'Staff Removed From Your Organization.');
         

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_cat()
    {
        //
        $cat = hmo_cat::find($_POST['id']);
        $cat->delete();
         return redirect()->back()->with('success', 'Staff Removed From Your Organization.');
         

    }
}
