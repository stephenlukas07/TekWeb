<?php
	include "connect.php";

	$userID = $_POST['postUserId'];
	$hotelID = $_POST['postHotelId'];

	$hasil ="INSERT into bookings VALUES('', '$hotelID', '$userID')";

	$result = mysql_query($hasil);

	if ($result){
		header("Location: index.php");
	} else {
	}
?>