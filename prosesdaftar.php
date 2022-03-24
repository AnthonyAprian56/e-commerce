<?php
// membuat koneksi
include "koneksi.php";
// Deklarasi variable
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$password = $_POST['sandi'];
$no_handphone = $_POST['no_handphone'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$kode_pos = $_POST['kode_pos'];
$alamat = $_POST['alamat'];
$submit = $_POST['submit'];

  if(isset($submit)){//ngecek waktu klik submit kosong tidak 
  mysqli_query($connect,"insert into daftar(nama_lengkap,email,password,no_handphone,kota,kode_pos,alamat,status) values 
  ('$nama_lengkap','$email','$password','$no_handphone' , '$kota', '$kode_pos', '$alamat','user')");
  echo "<script>alert('Trimakasih sudah mendaftar, Silahkan Login'); window.location=('login.php');</script>";
 }
 else {
 	echo "gagal tambah";
 }
?>