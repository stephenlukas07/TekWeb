<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<?php 
include "../include/config.php";
if($_SESSION['level']!="admin"){
echo "<h1 align=center><blink>Maaf, Akses Ditolak!</blink></h1>";
}else{
$kepsek = mysql_fetch_array(mysql_query("SELECT * FROM kep_sek"))
?>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_admin.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center"><u>Update Data Kepala Sekolah</u></h2> 
  <table border="1" align="center"><tr><td>
<form name="form" id="form" class="form" action="update_kepsek.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="146">Nama Kepala Sekolah</td>
    <td width="7">:</td>
    <td width="270"><input type="text" name="nama" id="nama" value="<?php echo $kepsek['nama'] ?>" class="form-control"/></td>
  </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" id="username" value="<?php echo $kepsek['username'] ?>" class="form-control"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" value="****************" class="form-control"/></td>
  </tr>
  <tr>
    <td>Ulangi Password</td>
    <td>:</td>
    <td><input type="password" name="password2" id="password2" value="****************" class="form-control" /></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" class="btn btn-primary" />
      <input type="reset" name="reset" value="Reset" class="btn btn-danger"/>
    </div></td>
  </table>
</form>
</td></tr></table>
<?php
}
?>
</body>
</html>