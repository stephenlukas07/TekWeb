<?php
	include "connect.php";

	$bookingID = $_POST['postDeleteId'];

	$hasil ="DELETE FROM bookings WHERE bookingId = '$bookingID'";

	$result = mysql_query($hasil);

	if ($result){
		header("Location: my-bookings.php");
	} else {
	}
?>