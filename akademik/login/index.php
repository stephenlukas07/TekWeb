<?php

if(!session_start()){
session_start();
}
//cek apakah user sudah login atau belum
if(isset($_SESSION['user']) && (($_SESSION['hak']=="siswa") || ($_SESSION['hak']=="ortu") || ($_SESSION['hak']=="guru"))){
?>
<script>document.location.href="../"</script>
<?php 
}
?>
<html>
<head>
<script type="text/javascript">
function validate()
{
   var error="";
   var name = document.getElementById( "username" );
   if( name.value == "" )
   {
    error = "Harap isi username anda ";
    alert(error);
    return false;
   }
   var no = document.getElementById( "password" );
   if( no.value == "" )
   {
    error = "Harap isi password anda ";
    alert(error);
    return false;
   }

 else
 {
  return true;
 }
}

</script>
<title>Login Sistem Informasi Akademik Sekolah</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</script>
<style>
form {
    border: 3px solid #f1f1f1;
    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    margin: 0 auto;
}
html{
    padding-top : 20px;
}
</style>
</head>


<div id="formku" class="container-fluid">
<center><h2>Sistem Akademik Sekolah<br>Login Panel Siswa</h2></center><br><br>
  <div class="container">
      <div class="panel-body">
      <div class="panel panel-default">
        <form method="post" class="col-6" action="login.php" onsubmit = "return validate();">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="username">Password:</label>
            <input type="password" name="password" id="password" class="form-control">
          </div>
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LfDQiIUAAAAAMPKIqYFINbPxIjvNYv_T7hZ1Wai"></div>
          </div>
          <button type="submit" class="btn btn-primary" name="submit" id="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
  </div>
</body>
</html>