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
?>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_jadwal.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center"><u>Input Jadwal Pelajaran</u></h2>
<table align="center" border="1"><tr><td>
<form name="form" id="form" class="form" action="isi_jadwal.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<table width="394" height="267" border="0" align="center" style="margin:20px">
  <tr>
    <td height="39">Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas" class="form-control">
		<option value="">-Pilih Kelas-</option>
        <?php 
		$query = mysql_query("SELECT nama FROM ruang_kelas");
		while($kelas = mysql_fetch_array($query)){
		echo "<option>$kelas[nama]</option>";
		}
		?>
      </select>    </td>
  </tr>
  <tr>
    <td height="38">Mata Pelajaran </td>
    <td>:</td>
    <td><select name="pelajaran" id="pelajaran" class="form-control">
        <option value="">-Pilih Pelajaran-</option>
        <?php 
	$hajar = mysql_query("SELECT nama FROM mata_pelajaran");
	  while ($pl = mysql_fetch_array($hajar)){
	  echo "<option>$pl[nama]</option>";
	}
	?>
      </select>
    </td>
  </tr>
  <tr>
    <td width="108" height="41">Hari</td>
    <td width="11">:</td>
    <td width="238"><select name="hari" id="hari" class="form-control">
	<option>Senin</option>
	<option>Selasa</option>
	<option>Rabu</option>
	<option>Kamis</option>
	<option>Jumat</option>
	<option>Sabtu</option>
    </select>
    </td>
  </tr>
  <tr>
    <td height="40">Jam Pelajaran </td>
    <td>:</td>
    <td><select name="jammulai" id="jammulai">
	<?php for($i=7;$i<=17;$i++){
	if($i<=9){$i="0$i";}
	echo "<option>$i</option>";
	}?>
    </select>
	<select name="menitmulai" id="menitmulai">
	<?php for($i=0;$i<=59;$i++){
	if($i<=9){
	$i="0$i";
	}
	echo "<option>$i</option>";
	}?>
    </select>
	&nbsp;s/d&nbsp;
	<select name="jamakhir" id="jamakhir">
	<?php for($i=7;$i<=17;$i++){
	if($i<=9){$i="0$i";}
	echo "<option>$i</option>";
	}?>
    </select>
	<select name="menitakhir" id="menitakhir">
	<?php for($i=0;$i<=59;$i++){
	if($i<=9){
	$i="0$i";
	}
	echo "<option>$i</option>";
	}?>
    </select>
	</td>
  </tr>
  <tr>
    <td height="36">Guru</td>
    <td>:</td>
    <td><select name="guru" id="guru" class="form-control">
	<option value="">-Pilih Guru-</option>
	<?php 
	$guru = mysql_query("SELECT nama FROM guru");
	while($hasil = mysql_fetch_array($guru)){
	echo "<option>$hasil[nama]</option>";
	}
	?>
    </select>
    </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" class="btn btn-primary" />
	  <input type="reset" name="reset" value="Reset" class="btn btn-danger" />
    </div></td>
  </tr>
</table>
</form>
</td></tr></table>
</body>
</html>