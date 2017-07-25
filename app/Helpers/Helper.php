<?php

namespace App\Helpers;

class Helper {
    /*
     * 
     */

    public static function getDate() {
        $date = date('Y');
        return $date;
    }
    
    

    /*
     * 
     */

    public static function no_cache() {
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
    }

    /*
     * 
     */

    public static function print_r($array, $exit='') {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        if(!empty($exit)){
            exit;
        }
    }
    

    /**
     * 
     */
    public static function get_timestamp() {
        $now = new DateTime();
        $timestamp = $now->format('Y-m-d H:i:s');    // MySQL datetime format
        return $timestamp;
    }

}
