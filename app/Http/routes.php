<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#phpinfo page
Route::get('phpinfo', function() {
    echo phpinfo();
});

#Root page
Route::get('/', function () {
    return view('pages.home');
});
Route::get('home', function () {
    return view('pages.home');
});

#About page
Route::get('/about', function () {
    return view('pages.about');
});


// Required Parameters
Route::get('param/{id}', 'ParamController@index');

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    echo '<br>post ='.$postId;
    echo '<br>comment ='.$commentId;
});


// Optional Parameters
Route::get('user/{name?}', function ($name = null) {
    return $name;
});
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});


// Data page
Route::get('data', 'DataController@index');


#Contact page
Route::get('contact.do', 'ContactController@getContact');
Route::post('contact.do', 'ContactController@postContact');



Route::get('version', function(){
    $laravel = app();
    return "Your Laravel version is ".$laravel::VERSION;
    /* You can also browse to and open file 
       vendor\laravel\framework\src\Illuminate\Foundation\Application.php
     */
});



#Dashborad page
//Route::get('dashborad', 'DashboardController@index');

/*
  |--------------------------------------------------------------------------
  | Auth Routes
  |--------------------------------------------------------------------------
 */

//Route::get('login', 'AuthController@getLogin');   
//Route::post('login', 'AuthController@postLogin');
//Route::get('logout', 'AuthController@getLogout');

Route::get('login', 'Auth\AuthController@getLogin'); 
Route::get('login.html', 'Auth\AuthController@getLogin'); 
Route::post('login.html', 'Auth\AuthController@postLogin'); 
Route::get('logout', 'Auth\AuthController@logout'); 

Route::get('forgot_password', 'AuthController@getForgot_password');
//Route::get('register.html', 'AuthController@getRegister');


// Registration routes...
Route::get('register.html', 'Auth\AuthController@getRegister');
Route::post('register.html', 'Auth\AuthController@postRegister');




/*
  |--------------------------------------------------------------------------
  | 
  |--------------------------------------------------------------------------
 */
/*
Route::group(['middleware' => 'prevent-back-history'],function(){
	Auth::routes();
	Route::get('/home', 'HomeController@index');

});
*/


Route::group(['middleware' => ['auth', 'prevent-back-history']], function () {
    
    #Dashborad page
    Route::get('dashboard', 'DashboardController@index');  
    
    #Product page
    Route::get('product', 'ProductController@index');
    Route::get('product/list', 'ProductController@index');
    Route::get('product/add', 'ProductController@add');
    
    #profile page
    Route::get('profile', 'ProfileController@index');
    Route::post('profile', 'ProfileController@edit');
    Route::get('profile/password', 'ProfileController@index');
    Route::post('profile/password', 'ProfileController@edit_password');
    
});


//Route::group(['middleware' => ['web']], function () {
//    Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
//    Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
//    Route::get('/home', ['middleware' => 'auth', 'as' => 'home', 'uses' => 'UsersController@home']);
//    Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
//    Route::resource('users', 'UsersController');
//});



//Route::group(['middleware' => ['web']], function () {
//
//     // Authentication routes...
////    Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
////    Route::get('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
//    
////    Route::get('auth/login', 'Auth\AuthController@getLogin');
////    Route::post('auth/login', 'Auth\AuthController@postLogin');
////    Route::get('auth/logout', 'Auth\AuthController@getLogout');
////    
//
//    
//    
//    
//    
//});   