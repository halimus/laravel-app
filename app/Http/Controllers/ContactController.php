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


class ContactController extends Controller {

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
    public function getContact() {
        $data['title'] = 'Contact Page';




        //die('contact view');
        return view('pages.contact', $data);
    }

    /*
     * 
     */

    public function postContact() {
        $data['title'] = 'Contact Page';

        //Validation rules
        $rules = $this->rules();
        $messages = $this->messages();

        //Validate
        //$validator = Validator::make(Input::all(), $rules, $messages);
        $validator = Validator::make(Input::all(), $rules);

        //$validator->passes()
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else { //Ok to send email
            $post = Input::all();

            $first_name = $post['first_name'];
            $last_name = $post['last_name'];
            $email = $post['email'];
            $phone = empty($post['phone']) ? null : $post['phone'];
            $subject = $post['subject'];
            $message = $post['message'];

            $data['successMessage'] = 'Thank you, we will reach out to you shortly!';
            
        }

      
        //die('contact view');
        return view('pages.contact', $data);
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
