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
            'role' => ['nullable', 'string', 'max:255'],
            'pp' => ['nullable', 'max:2000'],
            'gender' => ['nullable', 'string', 'max:255'],
            'nhis' => ['nullable', 'string', 'max:255'],
            'expertise' => ['nullable', 'string', 'max:255'],
            'type' => ['nullable', 'string', 'max:255'],
            'username' => ['nullable', 'string', 'max:255'],
            'add' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'cc' => ['nullable', 'string', 'max:255'],
            'hmo_org' => ['nullable', 'string', 'max:255'],
            'hmo_orgg' => ['nullable', 'string', 'max:255'],
            //'occupation' => ['nullable', 'string', 'max:255'],
            //'nok' => ['nullable', 'string', 'max:255'],
            //'nokp' => ['nullable', 'string', 'max:255'],
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
              $fileNameTostore = '1.jpeg';
           }
           if ($data['role'] == 'Patient') {
            patients::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'address' => $data['add'],
                //'img' =>  $fileNameTostore,
                'gender' => $data['gender'],
                //'twitter' => $data['twitter'],
                //'occupation' => $data['occupation'],
                'username' => $data['username'],
                'phone' => $data['phone'],
                //'nok' => $data['nok'],
                'cc' => $data['cc'],
                //'nok_phone' => $data['nokp'],
                'pin' => $pin,
                //'password' => Hash::make($data['password']),
                //patients::where('email', $data['email'])->get('status') => $data['status'],
            ]);
           }

           if ($data['type'] == 'HMO' || $data['type'] == 'Organization') {
               if ($data['type'] == 'HMO') {
                   $hmo_org_name = $data['hmo_org'];
               }
               else{
                $hmo_org_name = $data['hmo_orgg'];
               }
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'role' => $data['type'],
                'img' =>  $fileNameTostore,
                'gender' => $data['gender'],
                'type' => $data['type'],
                'hmo_org_name' => $hmo_org_name,
                //'facebook' => $data['facebook'],
                'expertise' => $data['expertise'],
                'p_number' => $data['phone'],
                'cc' => $data['cc'],
                'nhis' => $data['nhis'],
                'pin' => $pin,
                'password' => Hash::make($data['password']),
                //patients::where('email', $data['email'])->get('status') => $data['status'],
            ]);
           }
           else{
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'img' =>  $fileNameTostore,
            'gender' => $data['gender'],
            'type' => $data['type'],
            //'facebook' => $data['facebook'],
            'expertise' => $data['expertise'],
            'p_number' => $data['phone'],
            'cc' => $data['cc'],
            'nhis' => $data['nhis'],
            'pin' => $pin,
            'password' => Hash::make($data['password']),
            //patients::where('email', $data['email'])->get('status') => $data['status'],
        ]);
    }
        //$pt = patients::find($data['email'])->get('status');
        //$pt = 'active';
        //$pt->save(); 
       //return patients::where('email', $data['email'])->create(['status' => 'active']);
    }
}
