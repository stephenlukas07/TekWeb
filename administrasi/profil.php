 <?php 
include "../include/config.php";
if($_SESSION['level']=="admin"){
$hasil = mysql_fetch_array(mysql_query("SELECT * FROM administrator WHERE username = '$_SESSION[admin]'"));
}else if($_SESSION['level']=="tu"){
$hasil = mysql_fetch_array(mysql_query("SELECT * FROM t_u WHERE username = '$_SESSION[admin]'"));
}else{
$hasil = mysql_fetch_array(mysql_query("SELECT * FROM kep_sek WHERE username = '$_SESSION[admin]'"));
}
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<h1 align="center">Profil Administrator</h1>
<table align="center" border="1"><tr><td>
<table width="359" height="163" border="0" align="center" style="margin:20px">
  <tr>
    <td width="148">Nama Lengkap </td>
    <td width="13">:</td>
    <td width="184"><?php echo $hasil['nama']; ?></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><?php echo $hasil['username']; ?></td>
  </tr>
<?php if($_SESSION['level']=="admin"){ ?>
  <tr>
    <td>Login Terakhir </td>
    <td>:</td>
    <td><?php echo $hasil['last_login'];?></td>
  </tr>
  <tr>
    <td>Login Saat Ini </td>
    <td>:</td>
    <td><?php echo $hasil['current_login'];?></td>
  </tr>
 <?php 
 }else if($_SESSION['level']=="tu"){ ?>
   <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $hasil['alamat'];?></td>
  </tr>
 <?php
 }
 ?>
</table>
</td></tr></table>
</body>
</html>