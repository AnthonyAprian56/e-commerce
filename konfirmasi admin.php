<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="alamat pengiriman.css">
    <title>Konfirmasi Admin</title>
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
              <a href="konfirmasi admin.html"> KONFIRMASI ADMIN </a>
           </div>
    <div id="nav">

        <h5 class="daftar" align="center">KONFIRMASI PEMBAYARAN</h5>
</div>

<table border="1" width="800" align="center">
<thead align="center">
<tr>
<td> NO </td>
<td> ORDER ID </td>
<td> STATUS </td>
</tr>
</thead>
<tr>
  <td> 1 </td>
  <td> H001 </td>
  <td> Sudah di bayar  </td>
  </tr>
  <tr>
  <td> 2 </td>
  <td> H002 </td>
  <td> Sudah di bayar </td>
  </tr>
  <tr>
  <td> 3 </td>
  <td> H003 </td>
  <td> Sudah di bayar </td>
  </tr>
  <tr>
  <td> 4 </td>
  <td> H004 </td>
  <td> Sudah dibayar </td>
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