<?php
include "koneksi.php";
$email = $_POST['email'];
$pass  = $_POST['sandi'];

$login = mysqli_query($connect, "SELECT * FROM daftar WHERE email = '$email' AND password='$pass'");
$row=mysqli_fetch_array($login);

if ($row['email'] == $email AND $row['password'] == $pass  AND $row['status']=="user")
{
  session_start();
  $_SESSION['email'] = $row['email'];
  header('location:HomePage.php');
}

else if ($row['email'] == $email AND $row['password'] == $pass  AND $row['status']=="admin") { //kalo dia levelnya admin masuk sini
	session_start();
	  $_SESSION['email'] = $row['email'];
	   echo "<script>alert('Anda login sebagai Admin !');</script>";
	  header('location:admin.php');
}
  else{
  echo "LOGIN GAGAL!Username atau Password Anda tidak benar";
  header('location:login.php'); 
}
?>