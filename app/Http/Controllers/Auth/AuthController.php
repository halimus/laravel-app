<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;




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
    protected $redirectTo = 'dashboard';
    //protected $redirectPath = 'dashboard';
    //protected $redirectTo = 'getting_started';
    protected $redirectAfterLogout = 'login';
    //protected $redirectAfterLogin = 'dashboard';

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
            'phone' => 'numeric|min:8',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:4|confirmed'
        ]);
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
    
    
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }
    
    
    /*
     * Customise the login method
     */
    
    protected function nocache($response)
    {
        $response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
        //$response->headers->set('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
        $response->headers->set('Pragma','no-cache');

        return $response;
    }
    
    public function logoutt() {
        //echo 'login'; exit;
        //Utils::no_cache();
        //return view('auth.login');
        
        Auth::logout();
        
        $this->nocache($next($request));
        
        return Redirect::to('login');
        
        
        
          //header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
          //header("Cache-Control: no-store, no-cache, must-revalidate");
          //header("Cache-Control: post-check=0, pre-check=0", false);
          //header("Pragma: no-cache"); 
        
        //$ci = & get_instance();
        //$ci->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        //$ci->output->set_header("Pragma: no-cache");
        
        //Auth::logout(); 
        //Session::flush();
        //Redirect::back();
        //Redirect::route('login');
        
    }
    
    protected function getFailedLoginMessage(){
        return 'Email or Password incorect!';
    }
    
   
    
    /*
     * Customise the login method
     */
    public function getRegister() {
        $data = array();
        
        $randomString = $this->generateRandomString(2);
        
        $data['first_name'] = 'Halim'.$randomString;
        $data['last_name'] = 'Lardjane'.$randomString;
        $data['gender'] = 'M';
        $data['email'] = 'halim'.$randomString.'@gmail.com';
        $data['password'] = '1234';

        return view('auth.register', $data);
    }
    
    /*
     * 
     */
    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function generateRandomString2($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
    
    
 
    
    
    
}
