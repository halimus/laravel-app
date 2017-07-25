<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DataController extends Controller {

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
        
        return $this->method1();
        //return $this->method2();
        //return $this->method3();

    }
    
    /*
     * method1 like CodeIgniter
     */
    public function method1(){
        $data['title'] = 'Data page';
        $data['message'] = 'This is message from DataController';
        $data['frameworks'] = ['Laravel', 'CodeIgniter', 'Symphony2', 'Yii2', 'CakePHP'];
        
        return view('pages.data', $data);
    }
    
    /*
     * method2
     */
    private function method2(){
        $title = 'Data page';
        $message = 'This is message from DataController';
        $frameworks = ['Laravel', 'CodeIgniter', 'Symphony2', 'Yii2', 'CakePHP'];

        return view('pages.data', compact('title', 'message', 'frameworks'));
    }
    
    /*
     * method3
     */
    private function method3(){
        $title = 'Data page';
        $message = 'This is message from DataController';
        $frameworks = ['Laravel', 'CodeIgniter', 'Symphony2', 'Yii2', 'CakePHP'];

        return view('pages.data')->with('title', $title)
                                 ->with('message', $message)
                                 ->with('frameworks', $frameworks);
        
    }

}
