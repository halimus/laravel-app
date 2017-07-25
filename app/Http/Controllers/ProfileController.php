<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;

use Auth;
use App\User;

use App\Helpers\Helper;


class ProfileController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     *
     * @return Response
     */
    public function index() {
        $data['title'] = 'Profile Page';

        // get the curent user loged
        //$id = Auth::user()->users_id;
        //$user = User::find($id);
        
        $user = Auth::user();
        //echo $user->id;
        //echo $user->first_name;
        
        $data['user'] = $user;
        

        
        //exit;
        

        //die('contact view');
        return view('pages.profile', $data);
    }

    /*
     * 
     */

    public function edit() {
        $data['title'] = 'Profile Page';



        $user = Auth::user();
        $data['user'] = $user;
      
        //die('contact view');
        return view('pages.profile', $data);
    }
    
    
    /*
     * 
     */

    public function edit_password() {
        $data['title'] = 'Profile Page';



      
        //die('contact view');
        return view('pages.profile', $data);
    }
    
    
    
    
    
    
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'phone' => 'numeric|min:8',
            'email' => 'required|email',
            'subject' => 'required|alpha',
            'message' => 'required|min:10'
        ];
    }

    /*
     * 
     */

    public function messages() {
        return [
            'first_name.required' => 'The First Name is required.',
            'first_name.alpha' => 'The First Name may only contain letters.',
            'last_name.required' => 'The Last Name is required.',
            'last_name.alpha' => 'The Last Name may only contain letters.'
        ];
    }

}
