<?php
require '../koneksi.php';

$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$nama = $_POST['fullname']; 
$desc = $_POST['desc'];
$price = $_POST['price'];
$loc  = $_POST['loc'];
$stock = $_POST['stock'];
$kategori = $_POST['kategori'];

move_uploaded_file($file_tmp, '../image_file/'.$foto);
$query = "INSERT INTO tb_barang SET nama_barang = '$nama' , deskripsi_barang = '$desc', lokasi_barang = '$loc' , harga_barang = '$price' , stok_barang = '$stock' , kategori = '$kategori' , gambar_barang = '$foto'";

mysqli_query($koneksi_db, $query);
header('Location: crud_barang.php'); 
?>