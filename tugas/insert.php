<?php
	include "connect.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT email FROM users WHERE email = '".$email."'"; 

		$result = mysql_query($query); 
		if (!$result) { die(mysql_errno()." : ".mysql_error()); } 

		/* Now lets check to see if we got any results back */ 

		if (mysql_num_rows($result) > 0) 
		{
		  echo "<center>Maaf, Anda telah Terdaftar</center>";
		  echo "<center>Data anda sudah tersimpan.</center>";
		  echo "<center><a href=index.php>Kembali ke halaman sebelumnya</a></center>";
		}  

	$hasil ="INSERT into users VALUES('', '".$email."', '".$password."')";

	$result = mysql_query($hasil);

	if ($result){
		header("Location: index.php");
	} else {
	}
?>