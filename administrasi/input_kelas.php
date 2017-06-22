<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_kelas.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center"><u>Input Ruang Kelas</u></h2> 
  </p>
<table border="1" align="center"><tr><td height="209">
<form name="form" id="form" class="form" action="isi_kelas.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
  <table width="437" height="149" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">Nama Ruangan </td>
    <td width="15">:</td>
    <td width="270"><select name="kelas" id="kelas" class="kelas">
      <option value="X">X</option>
      <option value="XI">XI</option>
      <option value="XII">XII</option>
    </select>
      <select name="jurusan" id="jurusan" class="jurusan" >
        <option value="-">-</option>
        <option value="IPA">IPA</option>
        <option value="IPS">IPS</option>
      </select>
	  <select name="ruang" id="ruang" class="ruang"><?php for($i=1;$i<=10;$i++){echo "<option>$i</option>"; } ?></select></td>
  </tr>
  <tr>
    <td height="42">Jumlah Siswa </td>
    <td>:</td>
    <td><select name="jumlah" id="jumlah" class="form-control">
	<?php for($i=1;$i<=100;$i++){echo "<option>$i</option>";}?>
    </select>
    </td>
  </tr>
  <tr>
    <td height="31" colspan="3"><div align="center">
      <input type="submit" class="form-control" name="Submit" value="Simpan Data" />
      <input type="reset" class="form-control" name="reset" value="Reset" />
    </div></td>
  </table>
</form>
</td></tr></table>
</body>
</html>