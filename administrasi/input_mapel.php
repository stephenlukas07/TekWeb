<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<center><h2>Input Mata Pelajaran</h2></center>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="valid_mapel.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<form name="form" id="form" class="form" action="isi_mapel.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<table align="center" border="1"><tr><td height="157">
<table width="277" height="133" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="109" height="62">Mata Pelajaran </td>
    <td width="5">:</td>
    <td width="149"><input type="text" name="nama" class="form-control" id="nama" /></td>
  </tr>
  <tr>
    <td height="65" colspan="3"><div align="center">
      <input type="submit" name="Submit" class="form-control" value="Simpan Data" />
      <input type="reset" name="reset" class="form-control" value="Reset" />
    </div></td>
  </tr>
</table></td></tr></table>
</form>

</body>
</html>