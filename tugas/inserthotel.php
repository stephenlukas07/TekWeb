<?php
	include "connect.php";

	$nama = $_POST['nama'];
	$description = $_POST['description'];
	$imgurl = $_POST['imgurl'];
	$star = $_POST['star'];
	$price = $_POST['price'];

	$query = "SELECT name FROM hotels WHERE name = '".$nama."'"; 

		$result = mysql_query($query); 
		if (!$result) { die(mysql_errno()." : ".mysql_error()); } 

		/* Now lets check to see if we got any results back */ 

		if (mysql_num_rows($result) > 0) 
		{
		  echo "<center>Maaf, Anda telah Terdaftar</center>";
		  echo "<center>Data anda sudah tersimpan.</center>";
		  echo "<center><a href=index.php>Kembali ke halaman sebelumnya</a></center>";
		}  

	$hasil ="INSERT into hotels VALUES('', '".$nama."', '".$description."', '".$imgurl."', '$star','$price')";

	$result = mysql_query($hasil);

	if ($result){
		header("Location: index.php");
	} else {
		echo "gagal";
	}
?>