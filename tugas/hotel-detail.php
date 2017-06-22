<?php 
  session_start();
  include "connect.php";
  $user = $_SESSION['user'];
  $userID = mysql_query("SELECT userId from users WHERE email = '".$user."' ");
  while($rows=mysql_fetch_assoc($userID)){
      $userid = $rows['userId'];
}
 ?>
<html>
<head>
	<title>Booking Lah - Detail</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    .image-display {
      height: 300px;
      width: auto;
    }
    .card-image {
      max-height: 300px;
      max-width: 400px;
      width: auto;
      vertical-align: middle;
    }
    .helper {
      display: inline-block;
      height: 100%;
      vertical-align: middle;
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
elseif ($user == "admin@admin.com"){
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
<?php
  $post_id = $_GET["id"];
  if ($post_id == "") {
    die("Invalid Request");
  }

  $sql = "SELECT * FROM hotels WHERE hotelId = $post_id";
  $result = mysql_query($sql);
   while($row = mysql_fetch_assoc($result)) {
      $hotelID = $row['hotelId'];
      $nama = $row['name'];
      $description = $row['description'];
      $price = $row['price'];
      $star = $row['star'];
      $imgurl = $row['imageUrl'];
    }
    
?>
  <div class="col-sm-5 image-display">
    <center>
      <span class="helper"></span>
      <img src='<?php echo $imgurl; ?>' class="card-image">
    </center>
  </div>
  <div class="col-sm-7" id="display_mode">
    <h1><?php echo $nama; ?></h1>
    <h2><?php
        for($a=0;$a<$i;$a++){
        echo '<span class="glyphicon glyphicon-star star"></span>';
        }?>
            </h2>
    <h3><?php echo $description; ?></h3>

    <h4>
      Rp. <?php echo $price; ?> / night
    </h4>
    <!-- Section to book hotel -->

   
    <?php
if ($user == "user@example.com") {
	echo '<form method="post" action="book-hotel.php">';
    echo '<input type="hidden" name="postUserId" value="'.($userid).'">';
	echo '<input type="hidden" name="postHotelId" value="'.($hotelID).'">';
	echo '<button type="submit" class="btn btn-success">Book Now</button>';
    echo '</form>';
}
else{

}
?>
    
  </div>

</body>
</html>