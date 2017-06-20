<html>

   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
      <form action = "stud_create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='stud_name' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>

      </form>

   </body>
</html>
<!---https://www.tutorialspoint.com/laravel/insert_records.htm
http://www.tamtech.co.in/insert-data-into-mysql-database-table-using-laravel5
http://laravelbook.com/laravel-input-validation/---->