<?php 
	session_start();
	include "connect.php";
  $user = $_SESSION['user'];
?>
<html>
<head>
	<title>Booking Lah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    .card {
      height: 450px;
    }
    .card-image {
      max-height: 300px;
      max-width: 350px;
      width: auto;
      vertical-align: middle;
    }
    .image-display {
      height: 300px;
      width: auto;
    }
    .helper {
      display: inline-block;
      height: 100%;
      vertical-align: middle;
    }
    .image-caption {
      height: 100px;
    }
    .star {
      color: orange;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Booking Lah</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <?php
if(!isset($user)){
    echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>';
    echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>';
}
elseif ($user == "user@example.com") {
    echo '<li><a href=""><span class="glyphicon glyphicon-user"></span> You are logged in as';  echo " "; echo $user; echo '</a></li>';
    echo '<li><a href="my-bookings.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> My Bookings</a></li>';
    echo '<li><a href="logout-user.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
}
elseif ($user == "admin@bookinglah.com"){
    echo '<li><a href=""><span class="glyphicon glyphicon-user"></span> You are logged in as'; echo " "; echo $user; echo '</a></li>';
    echo '<li><a href="addhotel.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Hotel</a></li>';
    echo '<li><a href="logout-user.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
}
else{

}
?>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
  <?php  
   $sql = 'SELECT * FROM hotels';
   $result = mysql_query($sql);
   while($row = mysql_fetch_assoc($result)) {
   	$i= $row['star'];
      echo '<div class="col-sm-4">';
      echo "<img src='".$row["imageUrl"]."' class='center-block' width='300' height='250'><br>";
      echo "<center><a href=\"hotel-detail.php?id=".$row['hotelId']."\"><h1>{$row['name']}</h1></p> </a></center>";
      echo '<h2><center>';
      for($a=0;$a<$i;$a++){
      echo '<span class="glyphicon glyphicon-star star"></span>';
      }
      echo '</h2></center>';
      echo '</div>';
   }
   ?>
  </div>
</div>

</body>
</html>