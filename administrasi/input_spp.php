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
<script type="text/javascript" src="val_spp.js"></script>

<h2 align="center">Input Data Pembayaran SPP</h2><hr />
<fieldset style="width:60%;margin:auto;">
<legend>Input Data Pembayaran SPP</legend>
<form action="input_spp2.php" method="post" name="form" onsubmit="return validate(this)">
<table width="335" height="148" border="0" align="center">
  <tr>
    <td width="92">Kelas</td>
    <td width="35">:</td>
    <td width="194">
    	<select name="kelas" id="kelas" class="form-control">
        <option value="">Pilih Kelas</option>
        <?php
			$k=mysql_query("select nama from ruang_kelas");
        	while($kelas = mysql_fetch_array($k)){
			echo "<option>$kelas[nama]</option>";
				}
		?>
        </select>
    </td>
  </tr>
  <tr>
    <td>Bulan</td>
    <td>:</td>
    <td><select name="bulan" id="bulan" class="form-control">
    	<option value="">Pilih Bulan</option>
    <?php
		$bln=array('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember');
    	for($i=2009;$i<=2030;$i++){
			foreach($bln as $key => $val){
				echo "<option>$val $i</option>";
			} 
		}
	?>
    </select>
    </td>
  </tr>
  <tr align="center">
    <td colspan="3"><input type="submit" name="simpan" id="simpan" value="Next >>" class="btn btn-primary" /></td>
    </tr>
</table>
</form>
</fieldset>
</body>
</html>