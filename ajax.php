<?php
include_once 'session.php';
include_once 'admin/config/config.php';
include_once 'function.php';

if (isset($_POST['passwords']))
{
	$result = 0; 
	$names = $_POST['names'];
    $mobileno = $_POST['mobileno'];
    $passwords = md5($_POST['passwords']);
    $email = $_POST['email'];
    $fbid = $_POST['fbid'];
    $pin = $_POST['pin'];
    $time = date('Y-m-d h:i:s');
    $string = '0123456789';
    $string_shuffled = str_shuffle($string);
    $otp = substr($string_shuffled, 1, 5);
    $_SESSION['otp'] = $otp;
	$_SESSION['otptime'] = time();
    $message ="Dear " . $names . ", Thanks for register. Your OTP is " . $otp . " for account verification. www.fbdigitalmarketing.com \r\n \r\n";
    
    $query="INSERT INTO `users` (`name`, `password`,`otp`, `mobilenumber`, `emailid`, `pinnumber`, `facebookid`, `status`, `createdon`) VALUES ('$names', '$passwords','$otp', '$mobileno', '$email', '$pin', '$fbid','1', '$time')";
    //echo "--->".$query."<BR>";
    if(mysql_query($query,$db_conn))
    {
        $sel_id="SELECT * FROM users WHERE name='$names' AND password='$passwords' AND mobilenumber='$mobileno' AND emailid='$email' AND pinnumber='$pin' AND facebookid='$fbid' AND status>0";
        //echo "--->".$sel_id."<BR>";
        $sel_fet=mysql_fetch_array(mysql_query($sel_id,$db_conn));
        $_SESSION['user_id']=$sel_fet['usersid'];
        $_SESSION['mobilenumber']=$sel_fet['mobilenumber'];
        $_SESSION['name']=$sel_fet['name'];
        // setcookie("alert", "User Registeration information saved", time() + 10);
        sendsms($mobileno, $message);

        $result = 1;
    } else { 
    	$result = 0;
        echo "Error =>", mysql_error();
    }
    echo $result;
}

if (isset($_POST['type_diff']))
{
	$type_diff = $_POST['type_diff']; 
	if($type_diff == 'otp_verify')
	{
		$otp=$_POST['otp'];
		//$otp = $_POST['verifyotp'];
		$otptime = time() - $_SESSION['otptime']; //echo "-otp-->".$otp."-otvn-".$otp_verify_no."--ot--".$_SESSION['otptime']."--sopt-->".$_SESSION['otp']."<BR>";
		if($otptime <= 300) {
			if($otp == $_SESSION['otp']) {
				$update=mysql_query("UPDATE users SET status=2 WHERE usersid=$user_id");
				echo "4";
			} else {
				echo "1";
			}
		} else {
			echo "2";
		}
 	}

 	if($type_diff == 'otp_resend')
	{
		$string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $new_otp = substr($string_shuffled, 1, 5);
        $user_id = $_SESSION['user_id'];
        $mobilenumber = $_SESSION['mobilenumber'];
        $name = $_SESSION['name'];
        $_SESSION['otptime']=time();
        $_SESSION['otp']=$new_otp; //echo $_SESSION['otptime']."---->".$_SESSION['otp']."<BR>";
        if(mysql_query("UPDATE users SET otp=$new_otp WHERE usersid=$user_id"))
        {
	        $message ="Dear " . $name . ", Thanks for register. Your OTP is " . $new_otp . " for account verification. www.fbdigitalmarketing.com \r\n \r\n";
	        sendsms($mobilenumber, $message);
	        echo "1";
	    } else {
	    	echo "0";
	    }
	}

	if($type_diff == 'password_check')
	{
		$current_password=md5($_POST['current_password']);
		if (!empty($current_password))
		{
			$current_password_query="SELECT * FROM users WHERE  password  = '$current_password' AND  usersid ='$user_id' AND status > 0"; //echo $current_password_query."<BR>";
	         $fets = mysql_fetch_array(mysql_query($current_password_query, $db_conn));
		    if($fets['password'] && $current_password):
		    	$message = "1";
		    else:
		    	$message = "2";
		    endif;
			echo $message;	

	 	}
	}
	if($type_diff == 'already_field_exit')
	{
		$field_val=$_POST['field_val'];
		$field_nam=$_POST['field_nam'];
		if (!empty($field_val))
		{
			$current_password_query="SELECT * FROM users WHERE  $field_nam  = '$field_val'"; //echo $current_password_query."<BR>";
	         $fets = mysql_fetch_array(mysql_query($current_password_query, $db_conn));
		    if($fets[$field_nam] && $field_val):
		    	$message = "2";
		    else:
		    	$message = "1";
		    endif;
			echo $message;	

	 	}
	}
}

if (isset($_POST['loginprocess'])) 
{
	$username = $_POST['username'];
	$password = md5($_POST['password']);
    $fet = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE mobilenumber = '$username' AND password='$password' AND status >0 ", $db_conn));
    if($fet['mobilenumber'] && $username):
    	 $_SESSION['user_id']=$fet['usersid'];
    	 $_SESSION['mobilenumber']=$fet['mobilenumber'];
    	 $_SESSION['name']=$fet['name'];
    	 setcookie("alert", "Login Successfully!", time() + 10);

	 	$message = "1";
    else:
    	$message = "This Mobile Number & Password don't have!";
    endif;
	echo $message;
}
?> 