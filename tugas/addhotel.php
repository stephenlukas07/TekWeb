<?php
  session_start();
  $user = $_SESSION['user'];
?>
<html>
<head>
  <title>Booking Lah - Add New Hotel</title>
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
    }
    .image-display {
      height: 300px;
      width: auto;
    }
    .image-caption {
      height: 100px;
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
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> You are logged in as <?php  echo $user; ?></a></li>
        <li><a href="processor/logout-user.php"><span class="glyphicon glyphicon-remove"></span> Logout</a></li>
          </ul>
  </div>
</nav>

  <!-- Section to add new hotel -->
  <div class="container">
    <h1>Add New Hotel!</h1>
    <form method="post" action="inserthotel.php">
      <div class="form-group">
        <label for="postName">Name:</label>
        <input type="text" class="form-control" id="postName" name="nama">
      </div>
      <div class="form-group">
        <label for="postDescription">Description:</label>
        <textarea class="form-control" rows="5" id="postDescription" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="postImageUrl">Image URL:</label>
        <textarea class="form-control" rows="5" id="postImageUrl" name="imgurl"></textarea>
      </div>
      <div class="form-group">
        <label for="postStar">Star (1-5):</label>
        <input type="text" class="form-control" id="postStar" name="star">
      </div>
      <div class="form-group">
        <label for="postPrice">Price (in Rupiah):</label>
        <input type="text" class="form-control" id="postPrice" name="price">
      </div>
      <button type="submit" class="btn btn-default">Save</button>
    </form>
  </div>
</body>
</html>