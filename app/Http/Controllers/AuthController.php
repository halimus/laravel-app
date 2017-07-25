<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class AuthController extends Controller {

    /**
     *
     * @return Response
     */
    public function getLogin() {
        $data['title'] = 'Login';




        return view('auth.login', $data);
    }

    /**
     *
     * @return Response
     */
    public function postLogin() {
        $data['title'] = 'Login';




        return view('auth.login', $data);
    }

    /**
     *
     * @return Response
     */
    public function getLogout() {
        
    }

    /**
     *
     * @return Response
     */
    public function getForgot_password() {
        $data['title'] = 'Forgot_password';




        return view('auth.forgot_password', $data);
    }

    /**
     *
     * @return Response
     */
    public function getRegister() {
        $data['title'] = 'Rgister';




        return view('auth.register', $data);
    }

}
