<?php 
//error_reporting(0); 
$db_global_host = "localhost";  // server to connect to.
$db_global_database_username = "";  // mysql password to access the database with.
$db_global_database_password = "";  // mysql password to access the database with.
$db_global_database = "test";  // the name of the database.
$link_db_global = mysql_connect($db_global_host, $db_global_database_username, $db_global_database_password) or die("Cannot db Client Database"); 
mysql_select_db($db_global_database, $link_db_global);

	
	//customer Info
    $customerInfoQuery = "SELECT * FROM company_info";
	$customer_info = array();
	$customer_info_result = mysql_query($customerInfoQuery) or die("--error-->".mysql_error());
	if(mysql_num_rows($customer_info_result))
		{
			while($post = mysql_fetch_object($customer_info_result))
				{
                $customer_info_array[]=$post;					
                }
			        $customer_info['customer_details'] = $customer_info_array;
		}			
			
	//employee info	
	$employeeInfoQuery="SELECT * FROM employee_details";	//echo $employeeInfoQuery."<BR>";
	$employee_info = array();
	$employee_info_result = mysql_query($employeeInfoQuery) or die("--error-->".mysql_error());
	if(mysql_num_rows($employee_info_result))
		{
			$i=0;
			while($post = mysql_fetch_assoc($employee_info_result))
				{  
			        if($post['taxpayer'] == '1')
						$taxpayer="True";
					else if ($post['taxpayer'] == '0')
						$taxpayer="False";
			
			        $qu="SELECT  hobbies FROM employee_hobbies WHERE  employee_id=".$post['employee_id'];//WHERE employee_id=".$post['employee_id']." group by employee_id//echo $qu."<BR>";
					$hobbies_query=mysql_query($qu);
					$hobby_arr1=array();					
					while($hobbies_query_fet=mysql_fetch_object($hobbies_query))
					{						
						$hobby_arr1[]=$hobbies_query_fet->hobbies;						
					}
					
					$qu1="SELECT  employee_salary,month FROM employee_salary_statement WHERE employee_id=".$post['employee_id'];//WHERE employee_id=".$post['employee_id']." group by employee_id//echo $qu1."<BR>";
					$hobbies_query1=mysql_query($qu1);
					$hobby_arr11=array();
					while($hobbies_query_fet1=mysql_fetch_object($hobbies_query1))
					{
						$hobby_arr11[]=$hobbies_query_fet1->month.":".$hobbies_query_fet1->employee_salary;
					}				//echo "<pre>"; print_r($hobby_arr11);
										
					array_push($employee_info, [
							'employee_id'   => $post['employee_id'],
							'employee_name' => $post['employee_name'],
							'employee_contact_number' => $post['employee_contact_number'],
							'employee_phone_number' => $post['employee_phone_number'],
							'employee_age' => $post['employee_age'],
							'employee_gender' => $post['employee_gender'],
							'taxpayer' => $taxpayer,
							'employee_hobbies'=>$hobby_arr1,
							'employee_salary_statement'=>$hobby_arr11
							]);
			        /*$o->employee_id=$post['employee_id'];
                    $o->employee_name=$post['employee_name'];
					$o->employee_contact_number=$post['employee_contact_number'];
					$o->employee_phone_number=$post['employee_phone_number'];
					$o->employee_age=$post['employee_age'];
					$o->employee_gender=$post['employee_gender'];					
					if($post['taxpayer'] == '1')
						$taxpayer="True";
					else if ($post['taxpayer'] == '0')
						$taxpayer="False";					
					$o->taxpayer=$taxpayer;				
					$qu="SELECT  hobbies FROM employee_hobbies WHERE  employee_id=".$post['employee_id'];//WHERE employee_id=".$post['employee_id']." group by employee_id//echo $qu."<BR>";
					$hobbies_query=mysql_query($qu);
					$hobby_arr1=array();					
					while($hobbies_query_fet=mysql_fetch_object($hobbies_query))
					{						
						$hobby_arr1[]=$hobbies_query_fet->hobbies;						
					}				//echo "<pre>"; print_r($hobby_arr1);
					$o->employee_hobbies1=$hobby_arr1;					
					//$o->nameanbu="adthis";$o->nameanbu=array('a','b');//$o->employee_hobbies=$hobby_arr;					
					$qu1="SELECT  employee_salary,month FROM employee_salary_statement WHERE employee_id=".$post['employee_id'];//WHERE employee_id=".$post['employee_id']." group by employee_id//echo $qu1."<BR>";
					$hobbies_query1=mysql_query($qu1);
					$hobby_arr11=array();
					while($hobbies_query_fet1=mysql_fetch_object($hobbies_query1))
					{
						$hobby_arr11[]=$hobbies_query_fet1->month.":".$hobbies_query_fet1->employee_salary;
					}				//echo "<pre>"; print_r($hobby_arr11);
					$o->employee_salary_statement=$hobby_arr11;
					//$employee_info_array[$i] = $o;
					//array_push($employee_info,$employee_info_array);
					//echo "<pre>"; print_r($employee_info_array)."<BR>";
					//$o++;
					$i++;	*/		
				}
				//$employee_info['employee_details'] = $employee_info_array;//echo "<pre>"; print_r($employee_info1);		//echo "<br>************************<br><pre>"; print_r($employee_info_array);
                 $employee_info1['employee_details']	=$employee_info;			
						
		}
	$final_arry = array_merge($employee_info1,$customer_info);
	header("Content-type: application/json");
	echo print_r(json_encode($final_arry),true);

?>