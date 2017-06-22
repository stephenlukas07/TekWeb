<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<script type="text/javascript">
function cek(form){
var lama = form.p_lama.value;
var baru = form.p_baru.value;
var lagi = form.p_lagi.value;
if(lama==""){
alert('mohon isi password lama!');
return false;
}
if(baru==""){
alert('mohon isi password baru!');
return false;
}
if(lagi==""){
alert('ulangi ketik password baru!');
return false;
}
if(baru!=lagi){
alert('Password baru tidak cocok,\nCek ulang password baru Anda!');
return false;
}
return true;
}
</script>
<script type="text/javascript" src="sorot.js"></script>
<h1 align="center">Ganti Password</h1>
<div align="center" style="font-family:Arial, Helvetica, sans-serif">
<fieldset style="width:40%;">
<legend>Ganti Password</legend>

<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="ubah_password.php" onsubmit="return cek(this)" method="post">
<table width="307" height="175" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="128">Password Lama </td>
    <td width="14">:</td>
    <td width="151">
      <input type="password" name="p_lama" id="p_lama" class="form-control" />
    </td>
  </tr>
  <tr>
    <td>Password Baru </td>
    <td>:</td>
    <td>
      <input type="password" name="p_baru" id="p_baru" class="form-control"/>
    </td>
  </tr>
  <tr>
    <td>Ulangi Password </td>
    <td>:</td>
    <td>
      <input type="password" name="p_lagi" id="p_lagi" class="form-control"/>
    </td>
  </tr>
  <tr align="center">
    <td height="50" colspan="3"><input type="submit" name="Submit" value="Ganti Password" class="btn btn-primary" />
      <input type="reset" name="reset" value="Reset" class="btn btn-danger" /></td>
  </tr>
</table>
</form>
</fieldset>
</div>
</body>
</html>