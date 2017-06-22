<?php
$server   = "lkmm-td.petra.ac.id";
$username = "lkmmtd";
$password = "kapokmukapan";
$database = "lkmmtd_database";

$koneksi = mysql_connect($server,$username,$password) or die ('Koneksi gagal');

if($koneksi){
	mysql_select_db($database) or die ('Database belum dibuat');	
}

?>