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
//Route::get('/', 'WelcomeController@index');  // THIS IS FIRST SAMPLE PATH //URL:http://54.254.201.62/laravel/public/

//Route::get('/',function ()  {      echo 'success';  }); // THIS IS SECOUND SAMPLE PATH //URL:http://54.254.201.62/laravel/public/

// Route::get('hello',function ()  {      echo 'success';  }); // THIS IS THIRD SAMPLE PATH //URL:http://54.254.201.62/laravel/public/hello



/*Route::post('hello',function ()  {      echo 'posted';  });
Route::get('hello',function ()  {      echo "<form method='post' action='hello'>
    <input type='submit' name='submit' value='submit'>
    <input type='hidden' name='_token' value='".csrf_token()."'>
    </form>";  });*/

Route::get('', function(){	return View::make('login');});//return view("login");//login   // echo
//Route::post('', function(){	echo "Yes it is Working Fine!";}); //THIS IS IMPORT FOR get ,post ,action path find same folder name
Route::post('','LoginController@login');
//Route::get('insert','StudInsertController@insertform');
//Route::post('stud_create','StudInsertController@insert');

//Route::get('/', 'WelcomeController@index');

/*Route::get('/', 'SampleController@index1');
Route::get('insert','SampleController@index1@index1');
Route::post('create','StudInsertController@insert');

Route::get('home', 'HomeController@index');*/

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
// return view('greeting', ['name' => 'James']);
