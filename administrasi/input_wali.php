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
<h2 align="center"><u>Input Data Wali Murid</u></h2>

<table border="1" align="center"><tr><td>
<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="isi_wali.php" onsubmit="return validate(this)" method="post">
<table width="473" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="150" height="37">ID Wali Murid</td>
    <td width="17">:</td>
    <td width="227"><input type="text" class="form-control" name="id" id="id" size="10"/></td>
  </tr>
  <tr>
    <td height="37">Nama Lengkap </td>
    <td>:</td>
    <td><input type="text" name="nama" class="form-control" id="nama" size="30"/></td>
  </tr>
  <tr>
    <td height="38">Nama Siswa </td>
    <td>:</td>
    <td><select name="nis" id="nis" class="form-control">
      <option value="">-=Pilih=-</option>
      <?php $query = mysql_query("SELECT * FROM siswa"); 
	  while($qry = mysql_fetch_array($query)){
	  echo "<option value=\"$qry[idSiswa]\">$qry[nama]</option>";
	  }
	  ?>
    </select></td>
  </tr>
  <tr>
    <td height="35">Password</td>
    <td>:</td>
    <td><input type="password" name="password" class="form-control" id="password" size="30"/></td>
  </tr>
  <tr>
    <td height="50" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" class="form-control" id="alamat"></textarea></td>
  </tr>
  <tr>
    <td height="54" colspan="3"><div align="center">
      <input type="submit" class="form-control" value="Simpan Data" class="submit" />
      <input type="reset" class="form-control" class="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</td>
</tr>
</table>
</body>
</html>