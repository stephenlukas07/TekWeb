<?php
session_start();
if($_SESSION['level']=="admin"){
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_admin.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center"><u>Input Data Administrator</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form name="form" id="form" class="form" action="isi_admin.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">Nama Administrator </td>
    <td width="15">:</td>
    <td width="270"><input type="text" name="nama" id="nama" class="form-control" /></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" id="username" class="form-control"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" class="form-control"/></td>
  </tr>
  <tr>
    <td>Ulangi Password</td>
    <td>:</td>
    <td><input type="password" name="password2" id="password2" class="form-control"/></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" class="btn btn-primary" />
      <input type="reset" name="reset" value="Reset" class="btn btn-danger" />
    </div></td>
  </table>
</form>
</td></tr></table>
<?php
}else{
echo "<h1 align=center><blink>Maaf, Akses Ditolak!</blink></h1>";
}
?>

</body>
</html>