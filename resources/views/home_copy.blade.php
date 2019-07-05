@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('section') s 
           
            <!-- /.row -->
            <div class="col-sm-12">
            <div class="row">
            DOUBT:
21.6.2019
1.Laravel What is a guard?
2.login having issue for laravel 5.8 <home page redirection > & sub url.
3.@foreach how to use helper.php
4.larvel htmlspecialchars() expects parameter 1 to be string, array given comes to view page showing {{$multimension array}}
5.sqlserver datatype how to change it??how to see structure???
6.how to check curl without error???
20.6.2019
1.sqlserver query process (another database select,table values changes)
2.laravel 5.8 auth core functionality encrypt_decrypt changes
3.laravel multi auth how to use it??
4.login redirect goto again login page using /home URL 
19.6.2019
1.Git Access How to use??
2.http://127.0.0.1:8000/bitcoin/public/ (NOT WORKING WITH PORT)
3.<script src="{{ asset('js/app.js') }}" defer></script> OR <script src="{{ url('/public/js/app.js') }}" defer></script> 
4.DONE: <title>{{ config('app.name', 'BlockChain') }}</title>
5.WinZip
6.database connection how to change without .env file directly connect to database.php
22.6.2019:

24.6.2019

**************************************************DONE IT PROCESS***********************************************************************
25.6.2019:
1.why don't use model query cron job without any request only working raw query.
2.href="{{ route('profile.index') }}" *  href="{{ url('/profile') }}"
 (Route::get('/profile', 'UserController@index');)differenct need ??

3.{{url('/bank_show/'<?php echo $bank->bank_id;?>)}} working fine
   {{url('/bank_show/$bank->bank_id)}} not working why?
4.@auth :login , @guest:logout


Laravel 5.8 From Scratch

**************************
ADMIN:
https://pusher.com/tutorials/multiple-authentication-guards-laravel
https://colorlib.com/wp/free-bootstrap-admin-dashboard-templates/

GUARD:
https://code.tutsplus.com/tutorials/how-to-create-a-custom-authentication-guard-in-laravel--cms-29667

High CHART:
https://www.youtube.com/watch?v=eSaDo3lV_4k
https://laravelcode.com/post/laravel-5-chart-example-using-charts-package
https://www.codermen.com/blog/84/how-to-use-charts-in-laravel-5-7-using-charts-package
https://www.filterbypass.me/s.php?k=0DW5bij5h%2F5re7gElhdjmjDCBFeiYD8nJiYHo9i2BRId%2FGwXw3zq6PmFv5LvLcJPyE%2FVJ89LFZgxCcTqwB%2BhlrdYDV4M8INEJOqA8b0mjlMtpmGRoQBE&b=2

Tradeview Chart:
https://stackoverflow.com/questions/41649258/tradingview-widget-replacing-entire-html-body
http://jsfiddle.net/livewirerules/3e9jaLku/5
https://www.tradingview.com/widget/advanced-chart/
https://www.oodlestechnologies.com/blogs/Trading-View-Chart-Integration/
https://jsfiddle.net/gh/get/library/pure/highcharts/highcharts/tree/master/samples/stock/demo/areaspline/
https://in.tradingview.com/chart/?symbol=POLONIEX%3ABTCUSDT

Coinmarketcap:
	https://coinmarketcap.com/api/documentation/v1/#section/Endpoint-Overview
	https://pro.coinmarketcap.com/account
	https://sandbox.coinmarketcap.com/account	
    
BITCOIN INSTALL:
step1:DOWNLOAD		:https://bitcoin.org/en/download
step2:INSTALL		:https://www.youtube.com/watch?v=8iqbNK5thZE
https://en.bitcoin.it/wiki/Help:Installing_Bitcoin_Core
step3:privatekey	:https://www.youtube.com/watch?v=OX71C9DP3NE
step4:Methods		 :https://laanwj.github.io/bitcoin-python/doc/bitcoinrpc.connection.html
https://metacpan.org/pod/distribution/Bitcoin-RPC-Client/lib/Bitcoin/RPC/Client.pm
Step6:Easybitcoin	https://github.com/aceat64/EasyBitcoin-PHP
step7:JSON-RPC 		https://github.com/thinkphp/json-rpc-php

TRADING SAMPLE SITE:
https://testnet.blinktrade.com/#trading

DEPOSIT:
https://bitbay.net/en/helpdesk/payments-and-withdrawals/how-to-make-a-cryptocurrency-deposit-or-withdrawal

DATE:
https://php.net/manual/en/function.date.php

cryptocurrency:
https://colorlib.com/wp/cryptocurrency-website-templates/

USD TO BTC:
https://www.programmableweb.com/news/how-to-build-bitcoin-currency-converter-using-blockchain.info-apis/how-to/2014/05/01

CRYPTO TO FIAT & FIAT TO CRYPTO CONVERTING:
https://www.cryptonator.com/api
https://api.cryptonator.com/api/ticker/eth-EUR

TRADE OR EXCHANGE:
https://bitexchange.systems/
https://bitexchange.dpdcart.com/cart/view#/

WALLET:
https://www.dashed-slug.net/bitcoin-altcoin-wallets-wordpress-plugin/shortcodes/


LARAVEL IMAGE UPLOAD:
https://hdtuto.com/article/image-upload-tutorial-with-laravel-58
https://www.webslesson.info/2019/03/step-by-step-crud-operation-in-laravel-58-with-file-upload.html

AJAX IMAGE UPLOAD:
http://rishivharsun.blogspot.com/2013/07/ajax-upload-image-without-using-submit.html

lARAVEL LEARNING:
https://laracasts.com/series/laravel-from-scratch-2018/episodes/25

AJAX:
https://code.tutsplus.com/tutorials/how-to-use-ajax-in-php-and-jquery--cms-32494
https://www.filterbypass.me/s.php?k=KzArzCYMxWkjFnDHotnJ%2FwwENgSlCobMQrNl8OdigjtdcCOdS9P4TDCHDVuoqXIxHAMq6IaqXh7Vu9FWsZ0uqH%2BY52FqQlf0LRhnOK6ojIn3ivcu5P5n7vI%3D&b=2

        




**********************

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cryptocurrency
DB_USERNAME=root
DB_PASSWORD=

DB_CONNECTION=sqlsrv
DB_HOST=127.0.0.1
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=



sqlserver:
DESTINATION:11.0
SERVER NAME:USERI-PC
AUTHENTICATION:SQL SERVER
username:sa
password:xsotech123

https://www.techonthenet.com/sql_server/tables/alter_table.php

Database:
MYSQL:
Windows:
        xampp control panel :https://www.youtube.com/watch?v=VTRxqkOmn34
							  1.mysql - config -> Change to Port Part
		                      2.mysql - mysql_error_log File 
							  3.common config ->change to port part
	 

SQLSERVER:
	CREATE TABLE currency (
		  id              INT           NOT NULL    IDENTITY    PRIMARY KEY,
		  name           VARCHAR(100)  NOT NULL,
		  symbol          VARCHAR(100)  NOT NULL,
		  type          VARCHAR(100)  NOT NULL,
		  image          VARCHAR(100)  NOT NULL,
		  class          VARCHAR(100)  NOT NULL,
		);

		CREATE TABLE transaction (
		  tra_id              INT           NOT NULL    IDENTITY    PRIMARY KEY,
		  user_it           VARCHAR(100)  NOT NULL,
		  tupe          VARCHAR(100)  NOT NULL,
		 order type       VARCHAR(100)  NOT NULL,
		  currency          VARCHAR(100)  NOT NULL,
		  amount          VARCHAR(100)  NOT NULL,
		  fee          VARCHAR(100)  NOT NULL,
		   fee_er          VARCHAR(100)  NOT NULL,
		   total_amount VARCHAR(100)  NOT NULL,
		   received_amount varchar(100) not naull,
		   address    varchar(200),
		   status varchar(200),
		   status varchar(5),
		   created_at datetime,
		   updated_at datetime		);

	
		
	INSERT INTO currency 	VALUES ('United','USD','fiat','',''); 

	ALTER TABLE [yourTable] DROP COLUMN ID 

ALTER Table deposit add transaction_number varchar(255)
	ALTER TABLE [yourTable] ADD ID INT IDENTITY(1,1)
	exec sp_rename '[transaction_list].[fee]' , 'fee_amount', 'column'
	exec sp_rename 'currency.[old_columname]' , 'new_Columnname', 'column'

	EXEC sp_RENAME 'TableName.OldColumnName' , 'NewColumnName', 'COLUMN' 

	ALTER TABLE currency  Rename class to color_nam;

    Database - Databasename ->rightclick->tasks->generate script ->script file.
	 
	 DELETE FROM table_name WHERE condition;


   
	 

**************************************************DONE IT PROCESS***********************************************************************
NEW DATABSE CONNECTION - > File -> Object Exploer

SCHEME WITH DATA -> Database Rightclick ->Tasks->Generate Script ->select Scheme & Data

RUN OLD DATABASE RECORTDS TO NEW DATABASE:

use xso_blockchain
		Paste all the records.

Cross checking for  Primarkey Set:
      exec sp_help currency
	  
select * from currency

CREATE TABLE [dbo].withdraw(
	[withdraw_id] [int] IDENTITY(1,1) NOT NULL,
	[user_id] [int] NOT NULL,
	[type] [varchar](100) NOT NULL,
	[currency] [varchar](100) NOT NULL,
	[bank_name] [varchar](100) NULL,
	[address] [varchar](100) NULL,
	[transaction_id] [varchar](100) NULL,
	[admin_bank_id] [varchar](100) NULL,
	[fee_per] [varchar](100) NOT NULL,
	[fee_amount] [varchar](100) NOT NULL,
	[amount] [varchar](100) NOT NULL,
	[total_amount] [varchar](100) NOT NULL,
	[status] [int] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
	[transaction_number] [varchar](255) NULL,
	[bank_id] [varchar](255) NULL,
	[received_amount] [varchar](255) NULL)

exec sp_rename '[withdraw_settings].[with_set_id]' , 'wit_set_id', 'column'

exec sp_rename '[transaction_list].[fee]' , 'fee_amount', 'column'

CREATE TABLE wallet_address (
		  wallet_add_id              INT           NOT NULL    IDENTITY    PRIMARY KEY,
		  user_id           VARCHAR(100)  NOT NULL,
		  type          VARCHAR(100)  NOT NULL,
		  address       VARCHAR(1000)  NOT NULL,
		   status varchar(5),
		   created_at datetime,
		   updated_at datetime		);

ALTER Table wallet_address add currency varchar(255)	

USE [cryptocurrency]
GO

INSERT INTO [dbo].[wallet_address]
           ([user_id]
           ,[type]
           ,[address]
           ,[status]
           ,[created_at]
           ,[currency])
     VALUES
           (3,'crypto','LTC#@$@sdfsREWR785654>?<ZXsdf;/lkh','1','2019-06-26 03:41:26','LTC')
GO

update receive set address='r3kmLJN5D28dHuH8vZNUZpMC43pEHpaocV' where id=2

update receive set currency='XRP' where id=2	

exec sp_rename '[users].[proile_image]' , 'profile_image', 'column'  

ALTER Table users add original_profile_image varchar(500)	 
	




****************
High Chart:

AUTO LOAD Chart:
 
      i.$.getJSON('http://127.0.0.1/meena/learning/tradeview/sample.json', function (data) {
      ii.$( document ).ready(function() {

ERROR:

    1.Got Issue for Chart Not working
          Solved:Sample JSON having https at the same time site  having http. So solved the issue for sample json url change it http
                ISSUE:https://www.highcharts.com/samples/data/aapl-c.json
                SOLVED:http://127.0.0.1/meena/learning/tradeview/sample.json



CSS:
    css :/ (not working ) \ (working fine <link href="{{ asset('asset\css\animate.css') }}" rel="stylesheet">)


var num = 5.56789;
var n = num.toFixed(2);

****************
LARAVEL 5.7 WITH Window 7 INSTALL:
step:1
	https://www.youtube.com/watch?v=7YezCyBbqI0
	https://github.com/laravel-shift/laravel-5.7
	D:\XAMPP\htdocs\meena\bitcoin>https://github.com/laravel-shift/laravel-5.7  (1.shift+ rightclick - Terminal Open it 2.Terminal mark is copy the content)	

	
LARAVEL 5.8 WITH Window 7 INSTALL:

Step:1  Install
        https://laravel.com/docs/5.8
		PHP >= 7.1.3
		D:\XAMPP\htdocs\\bitcoin>composer global require laravel/installer (Globally Install)
		D:\XAMPP\htdocs\\bitcoin>composer create-project --prefer-dist laravel/laravel <projectname>
https://www.tutsmake.com/laravel-5-8-new-login-register-system/

Step:2  Setup:
		File Permission 777 storage
		File Permission 777 bootstrap
		File Permission Ventor bootstrap
		
		

Step:3	Configuration changes in .env file
		After successfully installed the laravel application, in the next step is  configuration .evn file. Let’s open .env file and setup database credential like database name , database user name , databasse password and host.
        Otherwise Using config/database.php . Its is security of site.

Step:4  Generate Laravel Application Key
		Configuration compeleted successfully of .evn file , Let’s open the command prompt and generate laravel application key using this given below command.
		D:\XAMPP\htdocs\bitcoin>php artisan key:generate
		Application key set successfully.
                                      its more help to session & encryption value for secure.
		
Step:5  Now run the created project
		In this step to use the php artisan serve command .it will start your server locally
		D:\XAMPP\htdocs\\bitcoin>php artisan serve
		If you want to run the project diffrent port so use this command
		D:\XAMPP\htdocs\\bitcoin>php artisan serve --port=8080 

Step:6
		laravel authentication is successfully completed, Now Go to the browser and hit the
		URL : http://localhost:8000/bitcoin/public OR http://127.0.0.1:8000//bitcoin/public
		If you not run php artisan server command , direct go to your browser and type the url
		URL : http://localhost/bitcoin/public/
		
Step:7	Laravel - Remove Public from URL using htaccess
         1.bitcoin/server.php Rename to index.php
		 2.Copy the .htaccess file bitcoin/public/ folder & past the bitcoin/ folder
		 3.Theme Issue solved to change the asset path url in 
		       D:\XAMPP\htdocs\meena\blockchain\resources\views\layouts\app.blade.php
		       <script src="{{ asset('js/app.js') }}" defer></script>
			    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
				Change TO:
				   <script src="{{ url('/public/js/app.js') }}" defer></script>
			    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
				 <link href="{{  url('/public/css/app.css') }}" rel="stylesheet">
Step:8  index.php remove from url
		Create .htaccess file inside the root of project folder.
		code is:
			<IfModule mod_rewrite.c>
			 RewriteEngine On
			 RewriteRule ^ index.php [L]
			</IfModule>
			
Step:9  You can get the base url of the Laravel application by:
		echo url('/'); or {{ url('/') }}
	
Step:10 Form URL:
          <form method="POST" action="{{ route('register') }}">
		  
Step:11 Migration:		
		  D:\XAMPP\htdocs\meena\blockchain>php artisan make:migration create_users_table
		  Created Migration: 2019_06_19_113439_create_<tablename>_table

Step:12 Model		  
		D:\XAMPP\htdocs\meena\blockchain>php artisan make:model test
		Model created successfully.
	
Step:13 Database
        .env 
		    DB_CONNECTION=mysql
			DB_HOST=127.0.0.1
			DB_PORT=3306
			DB_DATABASE=blockchain
			DB_USERNAME=root
			DB_PASSWORD=
		Error:Invalid catalog name: 1046 No database selected  (.env above changes do it.)
		
Step14:Helper
      1.https://laravel-news.com/creating-helpers
	  
	  2.D:\XAMPP\htdocs\meena\blockchain\app\Helpers\Helpers.php
	  <?php
		function test()
		{
			echo "testing";
		}
		?>
		
	 3.D:\XAMPP\htdocs\meena\blockchain\composer.json
	  "autoload": {
	 "files": [
        "app/helpers/helpers.php"
    ],
	
	4.D:\XAMPP\htdocs\meena\blockchain>composer dump-autoload
	Generating optimized autoload files> Illuminate\Foundation\ComposerScripts::post
	AutoloadDump
	> @php artisan package:discover --ansi
	Discovered Package: ←[32mbeyondcode/laravel-dump-server←[39m
	Discovered Package: ←[32mfideloper/proxy←[39m
	Discovered Package: ←[32mlaravel/tinker←[39m
	Discovered Package: ←[32mnesbot/carbon←[39m
	Discovered Package: ←[32mnunomaduro/collision←[39m
	←[32mPackage manifest generated successfully.←[39m
	Generated optimized autoload files containing 3623 classes

	5.D:\XAMPP\htdocs\meena\blockchain\app\Http\Controllers\Auth\RegisterController.php
	  use App\Helpers\Helpers;	
      echo test();
	  
step:15 Encryption/Decryption
        https://gist.github.com/joashp/a1ae9cb30fa533f4ad94
		function encrypt_decrypt($action, $string) {
		$output = false;
		$encrypt_method = "AES-256-CBC";
		$secret_key = 'This is my secret key';
		$secret_iv = 'This is my secret iv';
		// hash
		$key = hash('sha256', $secret_key);
		
		// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
		if ( $action == 'encrypt' ) {
			$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
			$output = base64_encode($output);
		} else if( $action == 'decrypt' ) {
			$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
		}
		return $output;
		}

step:16 AUTU CODE CUMISZATION:
		https://laravel.com/docs/5.8/authentication
	
step:17 .env change mysql to sqlserver 
      MYSQL:
        DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=blockchain
		DB_USERNAME=root
		DB_PASSWORD=
		
	  SQLSRV:
	    DB_CONNECTION=sqlsrv
		DB_HOST=127.0.0.1
		DB_PORT=1433
		DB_DATABASE=blockchain
		DB_USERNAME=sa
		DB_PASSWORD=xsotech123	

step:18 model
	<?php
	namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'currency';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name,symbol,type,image,class'];   
}


step:19 application name
		 <title>{{ config('app.name', 'BlockChain') }}</title>
		 .env file change to app_name=''
		 
step:20 auth functionality 
      https://slick.pl/kb/laravel/overriding-login-and-registration-functionality-in-laravel-5/
	

step:21 query
        $users = Currency::select('name','symbol','image','color_nam')->where('type','crypto')->get();
		$result=[];
		$i=1;
		foreach ($users as $user){
		$result['name'][$i]=$user['name'];
		$result['symbol'][$i]=$user['symbol'];
		$result['image'][$i]=$user['image'];
		$result['color_nam'][$i]=$user['color_nam'];
		$result['price'][$i]=livecurrencylist($user['name'],'','marketprice');
		$i++;
		}
step:22 @foreach
        @foreach($get_result_wallet as $wallet)					
		@endforeach


StepCC:1
D:\XAMPP\htdocs\meena\blockchain\vendor\laravel\framework\src\Illuminate\Foundation\Auth\RegistersUsers.php
//TIHP 20.6.2019 by xsoys


stepCC:2
D:\XAMPP\htdocs\meena\blockchain\vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php
 public function username()    {
        return 'first_hash_res'; ////TIHP 20.6.2019 by  return 'email';    }
		
stepCC:3
D:\XAMPP\htdocs\meena\blockchain\vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php

stepCC4:
D:\XAMPP\htdocs\meena\blockchain\resources\views\home.blade.php
D:\XAMPP\htdocs\meena\blockchain\app\Http\Controllers\DashboardController.php
D:\XAMPP\htdocs\meena\blockchain\resources\views\dashboard.blade.php
D:\XAMPP\htdocs\meena\blockchain\routes\web.php
   Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
  
stepCC5:
D:\XAMPP\htdocs\meena\blockchain\app\Http\Controllers\HomeController.php
  // $this->middleware('auth'); //TIHP 21.6.2019 by xsosys regards login issue 

22.6.19:
laravel:23 https://laravel.gen.tr/cheatsheet/
              remove it public folder change it code for layout/app.blade.php
	https://www.tutsmake.com/laravel-5-8-new-login-register-system/

database:
   if (count($result)) {
    // do something
}

foreach:if(!empty($get_result_wallet)) {}

Terminal:
Step:1 https://tecadmin.net/clear-cache-laravel-5/
D:\XAMPP\htdocs\meena\blockchain>php artisan cache:clear
Application cache cleared!

D:\XAMPP\htdocs\meena\blockchain>php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!

D:\XAMPP\htdocs\meena\blockchain>php artisan route:cache
25.6.2019
Enable Query Log:
DB::enableQueryLog();
$arr_user = DB::table('users')->select('name', 'email as user_email')->get();
dd(DB::getQueryLog());

**************************************************DONE IT PROCESS***********************************************************************
LOGIN RESTRICT:
  public function __construct()    {
        $this->middleware('auth');    } //Every Time Check it authentication for every page

INSERT MODEL & RAW RECORDS:

DB::table('bank')->insert(array('bank_name' => 'ts'));
Bank::create(['bank_name' => $request['bank_name'] ]);

AUTH CONDITION:
$userID = Auth::id();
		if (Auth::check()) {

Pagination:
   $banks = Bank::where()->latest()->paginate(5);
    return view('bank.index',compact('banks'))
	->with('i', (request()->input('page', 1) - 1) * 5);

URL WITH PAGINATION:
	Route::get('/bank_show/{id}', 'BankController@show');
	<?php $url="/bank_show/".$bank->bank_id;?>
    <a class="btn btn-info" href="{{ url($url)}}">Show</a>

LARAVEL:

Laracon EU tickets are now available! Get your tickets today!
Laravel

    Documentation
    Laracasts
    News
    Partners
    Forge
    Ecosystem

    Home
    Laracasts
    News
    Partners
    Forge
    Ecosystem

Documentation

    Prologue
        Release Notes
        Upgrade Guide
        Contribution Guide
    Setup
        Installation
        Configuration
        Homestead
    The Basics
        Routing
        Middleware
        Controllers
        Requests
        Responses
        Views
    Architecture Foundations
        Service Providers
        Service Container
        Contracts
        Facades
        Request Lifecycle
        Application Structure
    Services
        Authentication
        Billing
        Cache
        Collections
        Command Bus
        Core Extension
        Elixir
        Encryption
        Envoy
        Errors & Logging
        Events
        Filesystem / Cloud Storage
        Hashing
        Helpers
        Localization
        Mail
        Package Development
        Pagination
        Queues
        Session
        Templates
        Unit Testing
        Validation
    Database
        Basic Usage
        Query Builder
        Eloquent ORM
        Schema Builder
        Migrations & Seeding
        Redis
    Artisan CLI
        Overview
        Development

ads via Carbon
Deploy Laravel and PHP applications on DigitalOcean, Linode, & AWS.
ads via Carbon
Expand All

    Prologue
    Setup
    The Basics
    Architecture Foundations
    Services
    Database
        Basic Usage
        Query Builder
        Eloquent ORM
        Schema Builder
        Migrations & Seeding
        Redis
    Artisan CLI

Query Builder

    Introduction
    Selects
    Joins
    Advanced Wheres
    Aggregates
    Raw Expressions
    Inserts
    Updates
    Deletes
    Unions
    Pessimistic Locking

Introduction

The database query builder provides a convenient, fluent interface to creating and running database queries. It can be used to perform most database operations in your application, and works on all supported database systems.

    Note: The Laravel query builder uses PDO parameter binding throughout to protect your application against SQL injection attacks. There is no need to clean strings being passed as bindings.

Selects
Retrieving All Rows From A Table

$users = DB::table('users')->get();

foreach ($users as $user)
{
    var_dump($user->name);
}

Chunking Results From A Table

DB::table('users')->chunk(100, function($users)
{
    foreach ($users as $user)
    {
        //
    }
});

You may stop further chunks from being processed by returning false from the Closure:

DB::table('users')->chunk(100, function($users)
{
    //

    return false;
});

Retrieving A Single Row From A Table

$user = DB::table('users')->where('name', 'John')->first();

var_dump($user->name);

Retrieving A Single Column From A Row

$name = DB::table('users')->where('name', 'John')->pluck('name');

Retrieving A List Of Column Values

$roles = DB::table('roles')->lists('title');

This method will return an array of role titles. You may also specify a custom key column for the returned array:

$roles = DB::table('roles')->lists('title', 'name');

Specifying A Select Clause

$users = DB::table('users')->select('name', 'email')->get();

$users = DB::table('users')->distinct()->get();

$users = DB::table('users')->select('name as user_name')->get();

Adding A Select Clause To An Existing Query

$query = DB::table('users')->select('name');

$users = $query->addSelect('age')->get();

Using Where Operators

$users = DB::table('users')->where('votes', '>', 100)->get();

Or Statements

$users = DB::table('users')
                    ->where('votes', '>', 100)
                    ->orWhere('name', 'John')
                    ->get();

Using Where Between

$users = DB::table('users')
                    ->whereBetween('votes', [1, 100])->get();

Using Where Not Between

$users = DB::table('users')
                    ->whereNotBetween('votes', [1, 100])->get();

Using Where In With An Array

$users = DB::table('users')
                    ->whereIn('id', [1, 2, 3])->get();

$users = DB::table('users')
                    ->whereNotIn('id', [1, 2, 3])->get();

Using Where Null To Find Records With Unset Values

$users = DB::table('users')
                    ->whereNull('updated_at')->get();

Dynamic Where Clauses

You may even use "dynamic" where statements to fluently build where statements using magic methods:

$admin = DB::table('users')->whereId(1)->first();

$john = DB::table('users')
                    ->whereIdAndEmail(2, 'john@doe.com')
                    ->first();

$jane = DB::table('users')
                    ->whereNameOrAge('Jane', 22)
                    ->first();

Order By, Group By, And Having

$users = DB::table('users')
                    ->orderBy('name', 'desc')
                    ->groupBy('count')
                    ->having('count', '>', 100)
                    ->get();

Offset & Limit

$users = DB::table('users')->skip(10)->take(5)->get();

Joins

The query builder may also be used to write join statements. Take a look at the following examples:
Basic Join Statement

DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.id', 'contacts.phone', 'orders.price')
            ->get();

Left Join Statement

DB::table('users')
        ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
        ->get();

You may also specify more advanced join clauses:

DB::table('users')
        ->join('contacts', function($join)
        {
            $join->on('users.id', '=', 'contacts.user_id')->orOn(...);
        })
        ->get();

If you would like to use a "where" style clause on your joins, you may use the where and orWhere methods on a join. Instead of comparing two columns, these methods will compare the column against a value:

DB::table('users')
        ->join('contacts', function($join)
        {
            $join->on('users.id', '=', 'contacts.user_id')
                 ->where('contacts.user_id', '>', 5);
        })
        ->get();

Advanced Wheres
Parameter Grouping

Sometimes you may need to create more advanced where clauses such as "where exists" or nested parameter groupings. The Laravel query builder can handle these as well:

DB::table('users')
            ->where('name', '=', 'John')
            ->orWhere(function($query)
            {
                $query->where('votes', '>', 100)
                      ->where('title', '<>', 'Admin');
            })
            ->get();

The query above will produce the following SQL:

select * from users where name = 'John' or (votes > 100 and title <> 'Admin')

Exists Statements

DB::table('users')
            ->whereExists(function($query)
            {
                $query->select(DB::raw(1))
                      ->from('orders')
                      ->whereRaw('orders.user_id = users.id');
            })
            ->get();

The query above will produce the following SQL:

select * from users
where exists (
    select 1 from orders where orders.user_id = users.id
)

Aggregates

The query builder also provides a variety of aggregate methods, such as count, max, min, avg, and sum.
Using Aggregate Methods

$users = DB::table('users')->count();

$price = DB::table('orders')->max('price');

$price = DB::table('orders')->min('price');

$price = DB::table('orders')->avg('price');

$total = DB::table('users')->sum('votes');

Raw Expressions

Sometimes you may need to use a raw expression in a query. These expressions will be injected into the query as strings, so be careful not to create any SQL injection points! To create a raw expression, you may use the DB::raw method:
Using A Raw Expression

$users = DB::table('users')
                     ->select(DB::raw('count(*) as user_count, status'))
                     ->where('status', '<>', 1)
                     ->groupBy('status')
                     ->get();

Inserts
Inserting Records Into A Table

DB::table('users')->insert(
    ['email' => 'john@example.com', 'votes' => 0]
);

Inserting Records Into A Table With An Auto-Incrementing ID

If the table has an auto-incrementing id, use insertGetId to insert a record and retrieve the id:

$id = DB::table('users')->insertGetId(
    ['email' => 'john@example.com', 'votes' => 0]
);

    Note: When using PostgreSQL the insertGetId method expects the auto-incrementing column to be named "id".

Inserting Multiple Records Into A Table

DB::table('users')->insert([
    ['email' => 'taylor@example.com', 'votes' => 0],
    ['email' => 'dayle@example.com', 'votes' => 0]
]);

Updates
Updating Records In A Table

DB::table('users')
            ->where('id', 1)
            ->update(['votes' => 1]);

Incrementing or decrementing a value of a column

DB::table('users')->increment('votes');

DB::table('users')->increment('votes', 5);

DB::table('users')->decrement('votes');

DB::table('users')->decrement('votes', 5);

You may also specify additional columns to update:

DB::table('users')->increment('votes', 1, ['name' => 'John']);

Deletes
Deleting Records In A Table

DB::table('users')->where('votes', '<', 100)->delete();

Deleting All Records From A Table

DB::table('users')->delete();

Truncating A Table

DB::table('users')->truncate();

Unions

The query builder also provides a quick way to "union" two queries together:

$first = DB::table('users')->whereNull('first_name');

$users = DB::table('users')->whereNull('last_name')->union($first)->get();

The unionAll method is also available, and has the same method signature as union.

Pessimistic Locking

The query builder includes a few functions to help you do "pessimistic locking" on your SELECT statements.

To run the SELECT statement with a "shared lock", you may use the sharedLock method on a query:

DB::table('users')->where('votes', '>', 100)->sharedLock()->get();

To "lock for update" on a SELECT statement, you may use the lockForUpdate method on a query:

DB::table('users')->where('votes', '>', 100)->lockForUpdate()->get();

    Documentation Laracasts News Partners Forge Ecosystem 

Laravel is a trademark of Taylor Otwell. Copyright © Taylor Otwell.

Designed by


METHOD OF LARAVEL
    i.                    @method('DELETE'), @method('put') purpose 

@CSRF
    @csrf <refer this page>
	<input type="hidden" name="_token" value="T2cXLkqiNlQ0dVrmOJMYnRf8UU7wheGn8d0bjrFb">


ERROR LARAVEL:
1.419 - page expired - regards <form > @csrf</form>not declare.Solution solved for @csrf declared.


FOREACH:
@foreach($fiat_bank_list as $fbl)				
@php ($name_dis=$fbl->bank_name)
<option value='{{$fbl->currency}}'>{{$name_dis}}</option>
@endforeach


Eloquent & QUERY Builder:
  //Useing Eloquent
            $count = Model::count();  
  //Useing query builder
            $count = \DB::table('table_name')->count();


AJAX:
https://kode-blog.io/laravel-5-ajax-tutorial

@extends('name')
@yield('content')
  (@section('content') @endsection)
@yield('footer')
   (@section('footer') @endsection)
     only one @extends .but more @section or more include using blade.php

*******************************JUNE MONTH DONE IT**********************************************************************
1.7.2019
     SUCCESSS ALERT:
     return redirect('/profile')->with('success','Profile  Updated successfully.')-
         @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>


    @endif

    <?php echo phpinfo();?>

    date('Y-m-d H:i:s',strtotime())

    <?php if (is_numeric(887)) { echo "Yes"; } else { echo "No"; } ?>

    Error:
      1.Value ->datatype
      2.field_name->mismatched
      3.table_name 

$banks = Bank::where('user_id',$userID)->latest()->paginate(5);	  

				return view('bank.index',compact('banks'))

					->with('i', (request()->input('page', 1) - 1) * 5)

BANK LIST OF REFERENCE SITE:
https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=7&cad=rja&uact=8&ved=2ahUKEwiA15KTrYbjAhXR7XMBHUuIDrAQFjAGegQICBAB&url=https%3A%2F%2Fitsolutionstuff.com%2Fpost%2Flaravel-57-crud-create-read-update-delete-tutorial-example-example.html&usg=AOvVaw2vCtH-prrQzJRgDl3fQQ2y



PAGINATION:
{!! $banks->links() !!}


LARAVEL LIVE DEPLOYMENT:

4.DONE:.INDEX PAGE NAME ADDED pAGE REDIRECTION
    header_top.php
    footer.php
    web.php
    D:\XAMPP\htdocs\meena\blockchain\main\vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php

7.DONE:Login Redirection 
    D:\XAMPP\htdocs\meena\blockchain\main\app\Http\Controllers\Auth\LoginController.php

8.DONE Logout Redirection:
   D:\XAMPP\htdocs\meena\blockchain\main\vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php

9.DONE Dashboard name change to home page
 D:\XAMPP\htdocs\meena\blockchain\main\app\Http\Controllers\Auth\RegisterController.php	 
 D:\XAMPP\htdocs\meena\blockchain\main\app\Http\Controllers\Auth\LoginController.php
   protected $redirectTo = '/dashboard';//TIHF by xsosys 3.7.19 //protected $redirectTo = '/home';


D:\XAMPP\htdocs\meena\blockchain\main\app\Http\Middleware\RedirectIfAuthenticated.php
 return redirect('/dashboard');//TIHF by xsosys 3.7.19 // return redirect('/home');

D:\XAMPP\htdocs\meena\blockchain\main\routes\web.php

 D:\XAMPP\htdocs\meena\blockchain\main\resources\views\layouts\header_top.blade.php
 D:\XAMPP\htdocs\meena\blockchain\main\resources\views\layouts\leftmenu.blade.php



 AJAX VALIDATION PROCESS:
 https://www.filterbypass.me/s.php?k=KzArzCYMxWkjFnDHotnJ%2FwwENgSlCobMQrNl8OdigjtdcCOdS9P4TDCHDVuoqXIxHAMq6IaqXh7Vu9FWsZ0uqH%2BY52FqQlf0LRhnOK6ojIn3ivcu5P5n7vI%3D&b=2

        

<script type="text/javascript">

  $(function () {

     

      $.ajaxSetup({

          headers: {

              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

          }

    });

    

    var table = $('.data-table').DataTable({

        processing: true,

        serverSide: true,

        ajax: "{{ route('ajaxproducts.index') }}",

        columns: [

            {data: 'DT_RowIndex', name: 'DT_RowIndex'},

            {data: 'name', name: 'name'},

            {data: 'detail', name: 'detail'},

            {data: 'action', name: 'action', orderable: false, searchable: false},

        ]

    });

     

    $('#createNewProduct').click(function () {

        $('#saveBtn').val("create-product");

        $('#product_id').val('');

        $('#productForm').trigger("reset");

        $('#modelHeading').html("Create New Product");

        $('#ajaxModel').modal('show');

    });

    

    $('body').on('click', '.editProduct', function () {

      var product_id = $(this).data('id');

      $.get("{{ route('ajaxproducts.index') }}" +'/' + product_id +'/edit', function (data) {

          $('#modelHeading').html("Edit Product");

          $('#saveBtn').val("edit-user");

          $('#ajaxModel').modal('show');

          $('#product_id').val(data.id);

          $('#name').val(data.name);

          $('#detail').val(data.detail);

      })

   });

    

    $('#saveBtn').click(function (e) {

        e.preventDefault();

        $(this).html('Sending..');

    

        $.ajax({

          data: $('#productForm').serialize(),

          url: "{{ route('ajaxproducts.store') }}",

          type: "POST",

          dataType: 'json',

          success: function (data) {

     

              $('#productForm').trigger("reset");

              $('#ajaxModel').modal('hide');

              table.draw();

         

          },

          error: function (data) {

              console.log('Error:', data);

              $('#saveBtn').html('Save Changes');

          }

      });

    });

    

    $('body').on('click', '.deleteProduct', function () {

     

        var product_id = $(this).data("id");

        confirm("Are You sure want to delete !");

      

        $.ajax({

            type: "DELETE",

            url: "{{ route('ajaxproducts.store') }}"+'/'+product_id,

            success: function (data) {

                table.draw();

            },

            error: function (data) {

                console.log('Error:', data);

            }

        });

    });

     

  });

</script>

https://code.tutsplus.com/tutorials/how-to-use-ajax-in-php-and-jquery--cms-32494


ROUTER CALL GET/POST METHOD:
Route::get('/crypto_address_ajax/{id}', 'DepositWithdrawController@crypto_address_ajax');


OWN AJAX: onchange
<script type="text/javascript">
$(document).ready(function() {
    $('#addrss_show').change(function(e) {
		var res=$("#addrss_show").val();
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "{{URL('/crypto_address_ajax')}}/"+res,
            success: function(response)
            {
				alert(response);
               // var jsonData = JSON.parse(response);
                //if (jsonData.success == "1")
                
           }
       });
     });
});
</script>


  public function crypto_address_ajax(request $request)
    {
        $userID = Auth::id();
		if (Auth::check()) {
		echo $request['id'];	
		}
		else
			return view('login');
    }

    ERROR:  419 Page Expired  SOLITION <form> method don't use @csrf
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="no-js">
<!--<![endif]-->
<head>
<!--[if lt IE 10]>
<link rel="stylesheet" href="assets/css/no-ie.css">
<div class="no-iemsg">
    <span><img src="assets/images/no-ie.jpg" width="80" height="80"></span>
    <h1>Your browser is no longer supported !</h1>
    <h3>For better security and optimized experience, please upgrade your browser or install the latest version of any other browser.</h3>
    Try Other latest browsers - <a target="_blank" href="https://www.google.com/chrome/">Google Chrome</a> - <a target="_blank" href="https://www.mozilla.org/en-US/firefox/new/">Mozilla
        Firefox</a>
</div>                                     
<![endif]-->

LARAVEL IMAGE UPLOAD without submit buttion:
https://hdtuto.com/article/image-upload-tutorial-with-laravel-58
https://www.webslesson.info/2019/03/step-by-step-crud-operation-in-laravel-58-with-file-upload.html

    	public function profile_image_upload(Request $request)
    {       
		$image = $request->file('profile_image');
		$image_name = rand() . '.' . $image->getClientOriginalExtension();
		if($image->move(public_path('images'), $image_name)) //public_path('images') :blockchain\main\public\images
			echo "success";
		else
			echo "error";
		die;
    }

   <script>
    $(document).ready(function(){alert("test3");
        $('#profile_image').change(function(){alert("test2");
            profileform.submit(); alert("test1");
        });
    });
</script>

        <form id="profileform" name="profileform" action="{{URL('/profile_image_upload')}}" method="POST"  enctype="multipart/form-data">
				@csrf
				<input type="file" name="profile_image" id="profile_image" >
				</form>

LARAVEL SCRATCH CODE:
        {{ Auth::user()->name }} {{-- <- Email of the user --}}
        {{ Auth::user()->id }} {{-- <- id of the user --}}
        {{-- Laravel also has shorthand method for id --}}
        {{ Auth::id() }} {{-- <- shorthand for id --}}

https://laracasts.com/series/laravel-from-scratch-2018/episodes/25



CHANGE PASSWORD:
https://stackoverflow.com/questions/39586104/change-password-user-laravel-5-3

EMAIL FUNCTIONALITY:
https://www.webslesson.info/2019/04/login-registration-system-with-email-verification-in-laravel-58.html


https://makitweb.com/return-json-response-ajax-using-jquery-php/

IMAGE APPEND IN JAVASCRIPT:
https://www.quora.com/How-do-you-insert-an-image-in-Javascript


JSON PARSER& JSON stringify:

   $('#send_crypto_currency').click(function(e) {
        e.preventDefault();
		var send_cryp_cur=$('#send_crypto_currency').val();
        $.ajax({
            type: "GET",
            url: "{{URL('/send_crypto_currency_info')}}/"+send_cryp_cur,
			 dataType: 'JSON',
            success: function(response){
				  var res = JSON.stringify(response);
				  var obj = JSON.parse(res); alert(obj.currency);
				  currency=obj.currency;
				  address=obj.address;
				  img_path=obj.img_path;
				  balance-obj.balance;
				  $('#symbol_display').html(currency);
				  $('#send_address').html(address);
				  document.getElementById("x").src=img_path;
				  $('#balance_display').html(balance);

			}
       });
     }); 

      public function send_crypto_currency_info(request $request)
    {
        $userID = Auth::id();
		if (Auth::check()) {
			$return_arr = array();
			$withdraw_tra=DB::table('wallet_address')->where('user_id',$userID)->where('currency',$request['id'])->first();
			$dis_add=0;
			$currency=$withdraw_tra->currency;
			$address=$withdraw_tra->address;
			$img_path=URL('/')."/assets/images/".$withdraw_tra->currency.".png";			
			$balance=balance($userID,$withdraw_tra->currency);
			$return_arr= array("currency" => $currency,
                    "address" => $address,
                    "img_path" => $img_path,
                    "balance" => $balance);
			echo json_encode($return_arr);
	    }
		else
			return view('login');
    }

POPUP MODEL:
http://demo.codovel.com/laravel-crud-search-sort-ajax-modal-form
https://appdividend.com/2018/03/13/laravel-bootstrap-modal-form-validation-tutorial/

 @if (Route::has('password.request'))
                                    <!--a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a-->
                                @endif

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!5555</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                
                @section ('pane2_panel_title', 'Responsive Timeline')
                @section ('pane2_panel_body')
                    
                    <!-- /.panel -->
                    
                        
              
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"><i class="fa fa-check"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge info"><i class="fa fa-save"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                    <hr>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-gear"></i>  <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                        
                        <!-- /.panel-body -->
                   
                    <!-- /.panel -->
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    @section ('cchart11_panel_title','Line Chart')
                    @section ('cchart11_panel_body')
                    @include('widgets.charts.clinechart')
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'cchart11'))

                    @section ('pane1_panel_title', 'Notifications Panel')
                    @section ('pane1_panel_body')
                     
                        
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        
                        <!-- /.panel-body -->
                  
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'pane1'))
                      
                    
                    <!-- /.panel -->
                    @section ('pane3_panel_title', 'Chat')
                    @section ('pane3_panel_body')
                         <div class="btn-group pull-right margin-inverse-top">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>      
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'pane3'))
                </div>

                <!-- /.col-lg-4 -->
            
@stop
