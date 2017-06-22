<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<?php include "../include/config.php"; ?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="pesan.js"></script>
<script type="text/javascript" src="sorot.js"></script>
<h2 align="center"><u>Input Data Siswa </u></h2>

<table border="1" align="center"><tr><td>
<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="isi_siswa.php" onsubmit="return validate(this)" method="post">
<table width="473" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="150" height="37">NIS</td>
    <td width="17">:</td>
    <td width="227"><input type="text" name="nis" id="nis" size="10" class="form-control" /></td>
  </tr>
  <tr>
    <td height="37">Nama Lengkap </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama" size="30" class="form-control"></td>
  </tr>
  <tr>
    <td height="35">Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" size="30" class="form-control"></td>
  </tr>
  <tr>
    <td height="38">Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas">
      <option value="">-=Pilih=-</option>
      <?php $query = mysql_query("SELECT nama FROM ruang_kelas"); 
	  while($qry = mysql_fetch_array($query)){
	  echo "<option>$qry[nama]</option>";
	  }
	  ?>
    </select></td>
  </tr>
  <tr>
    <td height="50" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat" class="form-control"></textarea></td>
  </tr>
  <tr>
    <td height="54" colspan="3"><div align="center">
      <input type="submit" value="Simpan Data" class="btn btn-primary" />
      <input type="reset" value="Reset" class="btn btn-danger">
    </div></td>
  </tr>
</table>
</form>
</td>
</tr>
</table>
</body>
</html>