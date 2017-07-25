<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ProductController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /*
     * 
     */

    public function index($action = '') {


        return view('pages.product.list');
    }

    /*
     * 
     */

    public function add() {


        return view('pages.product.add');
    }

    /**
     *
     */
    public function getContact() {
        $data['title'] = 'Contact Page';

        //die('contact view');
        return view('pages.contact', $data);
    }

}
