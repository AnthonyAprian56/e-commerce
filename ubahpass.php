<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="ubahpass.css">
    <title>Ubah Pasword</title>
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





  <table id = "content">

           
           
          <div id="navigation3">
            <a href="HomePage.html" class = "menuhome"> HOME</a>/
            <a href="Akun.html" class = "menuhome"> AKUN SAYA</a>/
            <a href="ubahpass.html" class = "menuhome"> GANTI PASSWORD</a>
          </div>

           <div id="nav">
            <h1> UBAH PASSWORD </h1>
          </div>
        
            
            <tr align ="center"> 
            <td> <a href="Akun.html"> <button> INFORMASI AKUN </button> </td>
            <td> Password Lama : </td>            
            <td> <input class="search" type="text"> </td>
            </tr>

            <tr align ="center"> 
            <td> <a href="Akun.html"> <button> EDIT INFO AKUN </button> </td>
            <td> Password Baru : </td>            
             <td> <input class="search" type="text"> </td>
            </tr>

            <tr align ="center"> 
            <td> <a href="ubahpass.html"> <button> GANTI PASSWORD </button> </td>
            <td> Konfirmasi Password : </td>            
            <td> <input class="search" type="text"> </td>
            </tr>
           
           <tr align ="center">  
           <td colspan="3"> <button> UBAH PASSWORD </button> atau <button> BATAL </button></td>
           </tr>
  </table>
          
          <footer id="footer">
         <h4>Contact Us:</h4>
         <h5><img style="width :25px"src="instagram.png"> Gee_Olshop</h5>
        <h5>0821376298127</h5>
         <h5>0821751623</h5>
         </footer>


  
</body>
</html>