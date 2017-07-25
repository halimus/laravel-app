<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class RedirectController extends Controller {

    /*
     * @return Response
     */

    public function index() {
       
        if($_SESSION['auth_type']=="register") {
            //return redirect('user/registered');
            return 'register redirect';
        }

        if($_SESSION['auth_type']=="login") {
            //return redirect('user/logged');
            return 'login redirect';
        }

        return view('home');
        
    }
   
}
