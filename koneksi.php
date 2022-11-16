<?php
//membuat file koneksi.php
$host="localhost";
$user="root";
$password="";
$db="db_skurent";
$koneksi_db=mysqli_connect($host,$user,$password,$db);
$db_koneksi=mysqli_select_db($koneksi_db,$db)
?>