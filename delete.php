<?php
  include("koneksi.php");

  $query = "delete from barang where id_barang=" . $_GET['id'];
  if (mysqli_query($connect,$query)){
    header("location:admin.php");
  }
 ?>
