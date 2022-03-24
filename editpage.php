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

    <div id="nav">

        <h5 class="daftar" align="center">Edit</h5>
</div>

<br>
          <table id="form" style ="text-align:center, padding-left:500px;">
          <form action="edit.php" method="post">
          <p><input type="text" placeholder="Name" name="nama_barang"/></p>
          <p><input type="text" placeholder="harga" name="harga_barang"/></p>
          <p><input type="text" placeholder="kategori" name="kategori"/></p>
          <p><input type="text" placeholder="Stok" name="stok"/></p>
          <input type="submit" value="Save" name="submit"/>
          </form>
          </table>
            </body>
            </html>
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