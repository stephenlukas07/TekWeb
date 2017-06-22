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
<script type="text/javascript" src="val_spp2.js"></script>

<link rel="stylesheet" href="development-bundle/themes/base/jquery.ui.all.css">
	<script src="development-bundle/jquery-1.7.1.js"></script>
	<script src="development-bundle/ui/jquery.ui.core.js"></script>
	<script src="development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="development-bundle/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="demos.css">
<script>
	$(function() {
		$( "#tgl" ).datepicker();
		$( "#tgl" ).datepicker( "option", "dateFormat", 'dd-mm-yy' );
	});
	</script>

<fieldset style="width:60%;margin:auto;">
<legend>Input Data Pembayaran SPP</legend>

<form name="form" method="post" action="isi_spp.php" onsubmit="return validate(this)">
<input type="hidden" name="bulan" value="<?php echo $_POST['bulan']; ?>" />
<table width="371" height="207" border="0" align="center">
  <tr>
    <td>Nama Siswa</td>
    <td>:</td>
    <td><select name="nis" id="nis" class="form-control">
    	<option value="">Pilih Siswa</option>
        <?php
        $siswa = mysql_query("select * from siswa where kelas = '$_POST[kelas]'");
		while($op = mysql_fetch_array($siswa)){
			echo "<option value='$op[idSiswa]'>$op[idSiswa] - $op[nama]</option>";
		}
		?>
    	</select>
    </td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td>:</td>
    <td><input type="text" name="tgl" id="tgl" class="form-control"/></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td><input type="text" name="jumlah" id="jumlah" class="form-control"/></td>
  </tr>
  <tr align="center">
    <td colspan="3"><input name="kembali" type="button" value="&lt;&lt; Kembali" onclick="javascript:history.back()" class="btn btn-danger" /><input name="submit" type="submit" value="Simpan" class="btn btn-primary" /></td>
  </tr>
</table>
</form>
</fieldset>
</body>
</html>