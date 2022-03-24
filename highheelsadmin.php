<?php
	include "koneksi.php";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="alamat pengiriman.css">
    <title>Konfirmasi Admin</title>
    <style>
    table{border-collapse:collapse;width:80%;margin:auto; padding-bottom:150000px;}
    table, th, td{border:1px solid #666666;font-family:helvetica, sans, serif;font-size:12pt; padding:30px 30px 30px 30px}
</style>
</head>
<body>

   <div id = "shop">

        <div id = "navigation">
            <a href="knfrpembayaran.html"> Konfirmasi Pembayaran </a>
            <?php
            session_start();   
            if(empty($_SESSION['email']))
            {
              echo "<a href='login.php' class='menu2'> Masuk</a>";
              echo "<a href = 'Daftar.php'> Daftar</a>";
            }
            else
            {
              echo $_SESSION['email'];
              echo "<a href='logout.php'  class='menu2'> Logout</a>";
            }
            ?>
        </div>

            <center><a href="#"><img src = "Gambar\Logo\Paragraph_1.png" class="imglogo"></a></center>

            <div id="navigation2">
              <div class="dropdown">
              <a href="#" class = "dropbtn"> KATEGORI PRODUK </a>
                 <div class="dropdown-content">
                  <a href="highheelsadmin.php"> Highheels </a>
                   <a href="wedgesadmin.php"> Wedges </a>
                   <a href="sendaladmin.php"> Sendal </a>
                   <a href="flatshoesadmin.php"> Flatshoes </a>
                   <a href="sneakersadmin.php"> Sneakers </a>
              </div>
           </div>

                    <a href="carabelanja.php"> CARA BELANJA </a>
                    <a href="contact us.php"> CONTACT US </a>
            <input class="search" type="text" placeholder="cari..." >
            <a href="#"><button>Cari</button></a>
        </div>

              <hr class="pembatas" style="width:1200px;"></hr>
          
    </div>
    <div id="nav">

        <h5 class="daftar" align="center">TABEL ADMIN</h5>
</div>


<table border="1" width="800" align="center">
<caption><a href="createpage.php">Add Data</a>
 </caption>
<thead>
     <tr>
          <th>ID</th>
          <th>Nama Barang</th>
          <th>harga barang</th>
          <th>kategori</th>
          <th>stok</th>
          <th>Action</th>
     </tr>
</thead>
<tbody>
<?php
	$query = "SELECT * FROM barang WHERE kategori = 'HIGHHEEL' order by id_barang ";
	$result = mysqli_query($connect, $query);

	if(!$result){
		die ("eror");
	}

	while ($data = mysqli_fetch_assoc($result)) 
	{
		# code...
		echo "<tr>";
		echo "<td>" . $data ["id_barang"] . "</td>";
		echo "<td>" . $data ["nama_barang"] . "</td>";
		echo "<td>" . $data ["harga_barang"] . "</td>";
		echo "<td>" . $data ["kategori"] . "</td>";
		echo "<td>" . $data ["stok"] . "</td>";

		echo '<td>
		<a href="editpage.php?id='.$data['id_barang'].'">Edit</a> /
          <a href="delete.php?id='.$data['id_barang'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
	}
?>
</tbody>
</body>
</htmL>


