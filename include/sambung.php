<?php
$host="lkmm-td.petra.ac.id"; //deklarasi variabel
$user="lkmmtd"; 
$password="kapokmukapan"; 
$database="lkmmtd_phenphen"; 

//sambungkan ke database
$koneksi=mysql_connect($host,$user,$password); 

//memilih database yang akan dipakai
$select_db = mysql_select_db($database, $koneksi);

if($koneksi !== false && $select_db !== false) {  //cek koneksi 
//echo "berhasil koneksi"; 
}else{ 
    echo "koneksi ke database mysql gagal karena : ".mysql_error();
    exit();
} 
//Copyright (c) 2011 by Andi Sholihin
?>