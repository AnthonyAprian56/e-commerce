<?php
include "koneksi.php";
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$submit = $_POST['submit'];

if(isset($submit)){//ngecek waktu klik submit kosong tidak 
  mysqli_query($connect,"insert into barang(nama_barang,harga_barang,kategori,stok) values ('$nama_barang','$harga_barang','$kategori','$stok')");
  echo "<script>window.location=('admin.php');</script>";
 }
 else {
 	echo "gagal tambah";
 }
?>

