<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ParamController extends Controller {

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
    public function index($id='') {

        $data['id'] = $id;
        return view('pages.param', $data);
        
    }
    
        /*
     * method1 like CodeIgniter
     */
    public function method1(){
        $data['title'] = 'Data Page';
        $data['message'] = 'This is message from DataController';
        $data['frameworks'] = ['Laravel', 'CodeIgniter', 'Symphony2', 'Yii2', 'CakePHP'];
        
        return view('pages.data', $data);
    }

}
