<?php
include "koneksi.php";
$query = "SELECT * FROM barang";
$hasil = mysqli_connect($connect,$query);
while ($data = mysqli_fetch_assoc($hasil)){
    echo $data['nama_barang'];
}
?>