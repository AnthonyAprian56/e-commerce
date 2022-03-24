<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="knfrpembayaran.css">
    <title>KONFIRMASI PEMBAYARAN</title>
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


          <div id="nav">
            <h1> KONFIRMASI PEMBAYARAN </h1>
          </div>

  <div id="navigation3">
  <table id="form">
    <tr>
    <td>Id Pemesanan</td>
    <td>:</td> 
    <td><input type="text"class="input"/></td>
    </tr>
    <tr>
      <td>Tanggal</td>        
      <td>:</td> 
      <td><input type="text"class="input"/></td>
    </tr>

  </tr>
    <td>Atas Nama</td>      
    <td>:</td> 
    <td><input type="text"class="input"/></td>
  </tr>

  <tr>
    <td>Alamat</td>         
    <td>:</td> 
    <td><input type="text"class="input"/></td>
  </tr>
    
    <tr>
      <td>Jumlah Bayar</td>   
      <td>:</td> 
      <td><input type="text"class="input"/></td>
    </tr>

      <tr class="konfirm">  
         <td colspan="3"><button> KONFIRMASI PEMBAYARAN </button></td>
      </tr>

 </table>

</div>


           <!--footer-->
      <footer>
           <div class="footerkiri">
             <h4>Contact Us:</h4>
             <h5>0821376298127</h5>
             <h5>0821751623</h5>
          </div>

         <div class="footertengah"><h5><img src="Logo\insta.png">Gee_Olshop</h5></div>
         
         <div class="footerkanan">
          <p><img src="Logo\copyright.png"/></p>
          <p><img src="Logo\Text_8.png"/></p>
         </div>

      <div class="clear"></div>
    
        </footer> 
            </body>

</html>