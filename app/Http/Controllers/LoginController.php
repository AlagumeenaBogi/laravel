<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
//use Illuminate/Database;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function login(Request $req)
	{
		//echo "welcome"."<BR>";
                $email=$req->input('email');
                $password=$req->input('password');
                //DB::insert('insert into student (names) values(?)',[$email]); //THIS IS SAMPLE INSERT MODULEING
                $count=DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
                
                /*print_r($count);
                if(count($count >0))
                    echo "success";
                else
                  echo "failed";*/

                if(!empty($count))
                    return view('home');
                else
                  echo "failed";
                //  $users = DB::table('users')->get();         return view('user.index', ['users' => $users]);
               //$email = DB::table('users')->where('name', 'John')->value('email');
                //https://laravel.com/docs/5.4/queries
                //$user = DB::table('users')->where('name', 'John')->first(); echo $user->name;
	}

}
