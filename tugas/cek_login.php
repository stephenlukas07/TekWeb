<?php
	session_start();
	include "connect.php";

	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = "6LfDQiIUAAAAANS0oav3liyIA2DkPSw3DdHKn6zB";
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if(!$responseData->success){
        	header("Location: login.php?err=2");
        } else {
        	$email = $_POST['email'];
			$password = $_POST['password'];

			$sql = "SELECT COUNT(*) AS jumlah FROM users WHERE email = '".$email."' AND password = '".$password."'";
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);

			$kueri = mysql_query("SELECT email FROM users WHERE email = '".$email."'");
			$fets = mysql_fetch_array($kueri);

			if ($row['jumlah'] >= 1){
				$_SESSION['user'] = $email;
				header("Location: index.php");
			} else {
				header("Location: login.php?err=1");
			}
        }
    } else {
    	header("Location: login.php?err=3");
    }
?>
