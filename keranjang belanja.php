<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="alamat pengiriman.css">
    <title>Keranjang Belanja</title>
</head>
<body>

<body>

   <div id = "shop">
    
    <!--header-->
        <div id = "navigation">
            <a href = "knfrpembayaran.php"  > Konfirmasi Pembayaran </a>
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

            <div class="imglogo"><a href="#" ><img src = "Gambar\Logo\Paragraph_1.png" class="weblogo"></a></div>

            <div id="navigation2">
              <div class="dropdown">
              <a href="beranda.html" class = "dropbtn"> KATEGORI PRODUK </a>
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

               <div id="navigation3">
            <a href="HomePage.html"> HOME </a>/
            <a href="keranjang belanja.html"> KERANJANG BELANJA </a>
           </div>

    <div id="nav">

        <h5 align="center"class="daftar" align="left">KERANJANG BELANJA</h5>
        <h7 align="left"> Tinjau keranjang belanja anda </h7>
</div>

<table border="1" width="800" align="center">
<thead align="center">
<tr>
<td> GAMBAR </td>
<td> BARANG </td>
<td> HARGA </td>
<td> JUMLAH </td>
<td> TOTAL </td>
</tr>
</thead>
<tr>
  <td> <img src="highheels/1.jpg" class="gambar"> </td>
  <td align="center"> Thinky </td>
  <td align="center"> Rp.140.000 </td>
  <td align="center"> 1 </td>
  <td align="center"> RP.140.000 </td>
  </tr>
    <tr>
    <td colspan="4" align="center"> TOTAL KESELURUHAN  </td>
    <td> <b> Rp.140.000 </b> </td>
  </tr>
  </table>

           <footer id="footer">
    <h4>Contact Us:</h4>
    <h5><img style="width :25px"src="instagram.png">                      Gee_Olshop</h5>
    <h5><img style="width :25px"src="copyright.png">                      Copy Right</h5>
    <h5> Gee Olshop 2017</h5>
    <h5>0821376298127</h5>
    <h5>0821751623</h5>
        </footer> 

        </body>
</html>