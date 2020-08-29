<?php

namespace App\Http\Controllers\Auth;

use App\patients;
use App\User;
use Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
            'pp' => ['nullable', 'max:2000'],
            'gender' => ['nullable', 'string', 'max:255'],
            'expertise' => ['nullable', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
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
    
            }
           else{
                //default image for post if none was choosed
              $fileNameTostore = '1.jpg';
           }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'img' =>  $fileNameTostore,
            'gender' => $data['gender'],
            'expertise' => $data['expertise'],
            'pin' => $pin,
            'password' => Hash::make($data['password']),
            //patients::where('email', $data['email'])->get('status') => $data['status'],
        ]);
        //$pt = patients::find($data['email'])->get('status');
        //$pt = 'active';
        //$pt->save(); 
       //return patients::where('email', $data['email'])->create(['status' => 'active']);
    }
}
