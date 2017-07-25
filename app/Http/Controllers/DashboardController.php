<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class DashboardController extends Controller {

    /** 
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /*
     * @return Response
     */

    public function index() {
        $data['title'] = 'Dashboard';
        
        return view('pages.dashboard', $data);
        
    }
   
}
