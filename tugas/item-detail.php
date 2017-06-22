<?php
include "connect.php"
?>
<html>
<head>
	<title>Catalog Online</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    .left {
      position: relative;
      float: left;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Catalog Online</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

  if ($result->num_rows > 0) {
     while($row = mysql_fetch_assoc($result)) {
?>
  <div class="col-sm-5">
    <center><img src='<?=$row["imageUrl"]?>' width='400' height='400'><br></center>
  </div>
  <div class="col-sm-7" id="display_mode">
    <h1><?=$row["name"]?></h1>
    <p><b>Description : </b><?=$row["description"]?><br>
    <?=$row["postDate"]?></p>
    <h3><?=$row["description"]?></h3>

    <button type="button" class="btn btn-primary left" id="edit_btn">Edit</button>
    <!-- Section to delete item -->
    <form method="post" action="processor/delete-item.php" class="left">
      <input type="hidden" class="form-control" name="postCatalogId" value='<?=$row["catalogId"]?>'>
      <button type="submit" class="btn btn-danger" id="delete_btn">Delete</button>
    </form>
  </div>

  <!-- Form Untuk Edit -->
  <div class="col-sm-7" id="edit_mode">
    <form method="post" action="processor/update-item.php">
      <div class="form-group">
        <label for="postName">Name:</label>
        <input type="text" class="form-control" id="postName" name="postName" value='<?=$row["name"]?>'>
      </div>
      <div class="form-group">
        <label for="postDescription">Description:</label>
        <textarea class="form-control" rows="5" id="postDescription" name="postDescription"><?=$row["description"]?></textarea>
      </div>
      <div class="form-group">
        <label for="postImageUrl">ImageUrl:</label>
        <textarea class="form-control" rows="3" id="postImageUrl" name="postImageUrl"><?=$row["imageURL"]?></textarea>
      </div>

      <input type="hidden" class="form-control" name="postCatalogId" value='<?=$row["catalogId"]?>'>

      <button type="button" class="btn btn-default" id="edit_cancel_btn">Cancel</button>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
<?php
    }
  } else {
    echo "No catalog";
  }
?>

<script type="text/javascript">
  $(document).ready(function(){
    $("#edit_mode").hide();

    $("#edit_btn").click(function(){
        $("#display_mode").hide();
        $("#edit_mode").show();
    });
    $("#edit_cancel_btn").click(function(){
        $("#display_mode").show();
        $("#edit_mode").hide();
    });
});
</script>
</body>
</html>