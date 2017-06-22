<?php
include "../../include/conf_user.php";

if($_SESSION['hak']=="siswa"){
$nis = $_SESSION['user'];
}else{
$id = mysql_fetch_array(mysql_query("SELECT idSiswa FROM wali_murid_has_siswa WHERE idwali_murid = '$_SESSION[user]'"));
$nis = $id['idSiswa'];
}

$id = mysql_fetch_array(mysql_query("SELECT * FROM wali_murid_has_siswa WHERE idSiswa = '$nis' "));

$ortu = mysql_fetch_array(mysql_query("SELECT * FROM wali_murid WHERE idwali_murid = '$id[idwali_murid]'"));
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<h1 align="center">Profil Wali Murid </h1>
<table width="406" height="192" border="1" align="center">
  <tr><td>
<table width="378" height="164" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="145">ID Wali Murid </td>
    <td width="12">:</td>
    <td width="207"><?php echo $ortu['idwali_murid'];?></td>
  </tr>
  <tr>
    <td>Nama Lengkap </td>
    <td>:</td>
    <td><?php echo $ortu['nama'];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $ortu['alamat'];?></td>
  </tr>
</table>
</td></tr></table>
</body>
</html>