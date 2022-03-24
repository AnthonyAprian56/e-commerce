
<?
    include "koneksi.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Daftar.css">
    <title>Daftar</title>
</head>
<body>
  <div id = "shop">

    <!--header-->
        <div id = "navigation">
            <a href = "knfrpembayaran.php"  > Konfirmasi Pembayaran </a>
            <a href = "Login.php" > Masuk </a>
        </div>

              <div class="imglogo"><a href="HomePage.php" ><img src = "Gambar\Logo\Paragraph_1.png" class="weblogo"></a></div>
              
            <div id="navigation2">
              <div class="dropdown">
              <a href="home.php" class = "dropbtn"> KATEGORI PRODUK </a>
                 <div class="dropdown-content">
                   <a href="highheels.php">Highheels</a>
                   <a href="wedges.php">Wedges</a>
                   <a href="sendal.php">Sandal</a>
                   <a href="flatshoes.php">Flatshoes</a>
                   <a href="sneakers.php">Sneaker</a>
              </div>
           </div>

            <a href="carabelanja.php" class = "menu"> CARA BELANJA </a>
            <a href="contact us.php" class = "menu"> CONTACT US </a>
            <input class="search" type="text" value ="cari...">
            <a href="#"><button>Cari</button></a>
        </div>
              <hr class="pembatas"></hr>         
    </div>

<br>

   <div id="navigation3">
            <a href="HomePage.php" class = "menuhome"> HOME</a>/
            <a href="Daftar.php" class = "menuhome"> Daftar</a>
          </div>


 <?php
        $sql = "SELECT * FROM barang";
        // $sql = "SELECT barang.*, foto.* FROM foto INNER JOIN barang ON foto.id_barang = barang.id_barang";
        $result = mysql_query($sql);
        // echo "$result";
        if (mysql_num_rows($result) > 0) {
            // output data of each row
            echo "<table>";
            echo "<tr>";
                echo "<th>Id Barang</th>";
                echo "<th>Nama Barang</th>";
                echo "<th>Jumlah</th>";
                echo "<th>Harga</th>";
                echo "<th>Diskon</th>";
                echo "<th>Nama Kategori</th>";
                echo "<th>Foto</th>";
                echo "<th></th>";
                echo "<th></th>";
                echo "<th></th>";
            echo "</tr>";
            while($row = mysql_fetch_assoc($result)) {
                echo "<tr>";
                    echo "<td>" . $row["id_barang"] . "</td>";
                    echo "<td>" . $row["nama_barang"] . "</td>";
                    echo "<td>" . $row["jumlah"] . "</td>";
                    echo "<td>" . $row["harga"] . "</td>";
                    echo "<td>" . $row["diskon"] . "%</td>";
                    echo "<td>" . $row["nama_kategori"] . "</td>";
                    echo "<td>" . $row['jumlahFoto'] . "</td>";
                    echo "<td> <button type=" . "button" . " class=" . "tombolTabel" . " onclick=" . "window.location.href=" . "'uploadfoto.php?id=" . $row["id_barang"] . "'" . ">Add Foto</button> </td>";
                    echo "<td> <button type=" . "button" . " class=" . "tombolTabel" . " onclick=" . "window.location.href=" . "'delete.php?idBarang=" . $row["id_barang"] . "&idKategori=" . $row["id_kategori"] . "'" . ">Delete</button> </td>";
                    echo "<td> <button type=" . "button" . " class=" . "tombolTabel" . " onclick=" . "window.location.href=" . "'editData.php?id=" . $row["id_barang"] . "'" . ">Edit</button> </td>";
                echo "</tr>";
                
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        
    ?>


<!--footer-->
      <footer>
           <div class="footerkiri">
             <h4>Contact Us:</h4>
             <h5>0821376298127</h5>
             <h5>0821751623</h5>
          </div>

         <div class="footertengah"><h5><img src="Logo\insta.png">Gee_Olshop</h5></div>
         
         <div class="footerkanan">
          <p><img src="New folder\Group_1.png"/></p>
          <p><img src="New folder\Text_6.png"/></p>
         </div>

      <div class="clear"></div>
    
        </footer> 
  </div>
</body>
</html>
