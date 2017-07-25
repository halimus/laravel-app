<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'gender' => 'required',
            //'phone' => 'numeric|min:8',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:4|confirmed',
            'password2' => 'required|min:4|confirmed'
        ]);
    }
    
    public function rules() {
        return [
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'phone' => 'numeric|min:8',
            'email' => 'required|email|max:255',
            'password' => 'required|alpha',
            'message' => 'required|min:10'
        ];
    }
    
    public function postRegister(Request $request){
       
        /*$validator = $this->validator($request->all());
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }*/
        
        //Validation rules
        $rules = $this->rules();
  
        //Validate
        //$validator = Validator::make(Input::all(), $rules, $messages);
        $validator = Validator::make(Input::all(), $rules);
        
        //$validator->passes()
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else { //
            
        }

        echo 'save'; exit; 
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    
//    protected function create(array $data)
//    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
//    }
    
    protected function create0(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    
    /*
     * Customise the login method
     */
    public function getLogin() {
        //echo 'login'; exit;
        //Utils::no_cache();
        return view('auth.login');
    }
    
    /*
     * Customise the login method
     */
    public function getRegister() {
        //https://github.com/wahyusigit/Laravel-5.2-User-Leve-User-Role-Multi-Login-Basic
        $data = array();
        

        //$data['first_name'] = 'Halim';
        $data['last_name'] = 'Lardjane';
        $data['email'] = 'halim@gmail.com';
        
        
        return view('auth.register', $data);
        
    }
    
    
 
    
    
    
}
