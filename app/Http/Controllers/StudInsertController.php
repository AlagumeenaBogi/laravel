<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
//use Illuminate/Database;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller {
   public function insertform(){
      return view('stud_create');
   }

   public function insert(Request $request){
      $name = $request->input('stud_name'); echo "--this_is_namee-->".$name."<BR>";
      DB::insert('insert into student (names) values(?)',[$name]);
     // DB::insert('insert into student (names) values (1)');
      //DB::table('student')->insert(['names' => '1']);
      //DB::insert('insert into student (names) values (?)', [1]);
    // DB::statement("SELECT * FROM student");
    /*  $table = "student";
$check = DB::only('SELECT COUNT(*) as `exists`
    FROM information_schema.tables
    WHERE table_name IN (?)
    AND table_schema = database(laravel)',$table);
if(!$check) // No table found, safe to create it.
{
    echo "yes";
    // Schema::create …
}
else
    echo "no";*/

/*DB::table('student')->insert(
     array(
            'names'   =>   '13'
     )
);*/

      if(DB::connection()->getDatabaseName())
   {
     echo "connected successfully to database ".DB::connection()->getDatabaseName();
   }
      //https://laravel.com/docs/5.0/queries
      //https://laravel.com/docs/5.0/database
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}