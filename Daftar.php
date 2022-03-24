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

<br>

   <div id="navigation3">
            <a href="HomePage.php" class = "menuhome"> HOME</a>/
            <a href="Daftar.php" class = "menuhome"> Daftar</a>
          </div>
          

          <table id="form">
          <tr>
            <td colspan ="3" class="font"><b>Daftar</b></td>
          </tr>

          <form action="prosesdaftar.php" method="post">
  <tr>
      <td>Nama Lengkap </td>
      <td>:</td>
      <td><input type="text" Name="nama_lengkap" placeholder="Nama Depan & Nama Belakang" class="input" required></td>
  </tr>

   <tr>
      <td>Email </td>
      <td>:</td>
      <td><input type="text" Name="email" placeholder="Email Anda" class="input" required></td>
  </tr>
      
  <tr>
      <td>Password</td>
      <td>:</td> 
      <td><input type="password" Name="password" placeholder="Kata Sandi" class="input" required></td>
  </tr>

  <tr>
    <td>Konfirmasi Password</td>
    <td>:</td>
    <td><input type="password" Name="sandi" placeholder="Kata Sandi Baru" class="input" required></td>
  </tr>

  <tr>
     <td>No.Handphone</td>
     <td>:</td> 
     <td><input type="text" Name="no_handphone" placeholder="No.Handphone" class="input" required></td>
  </tr>
   
             
        <tr>
            <td>Kota</td>
            <td>:</td> 
            <td><input type="text" Name="kota" placeholder="Kota" class="input"required></td>
        </tr>

        <tr>
            <td>Kode Pos</td>
            <td>:</td> 
            <td><input type="text" Name="kode_pos" placeholder="Kode Pos" class="input"required></td>
        </tr>

        <tr> 
            <td>Alamat</td>
            <td>:</td> 
            <td><input type="text" Name="alamat" placeholder="Alamat anda "class="input"required></td>
        </tr> 

        <tr>
         <td><input value="Daftar" type="submit" name="submit"required></td>
         </tr>
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