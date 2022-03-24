<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="wedges.css">
    <title>WEDGES</title>
</head>
<body>
<div id = "shop">

        <div id = "navigation">
            <a href="knfrpembayaran.php"> Konfirmasi Pembayaran </a>
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

<center><a href="#"><img src = "Gambar/Logo/Paragraph_1.png" class="imglogo"></a></center>

         <div id="navigation2">
              <div class="dropdown">
                   <a href="#" class = "dropbtn"> KATEGORI PRODUK </a>
                 <div class="dropdown-content">
                   <a href="highheels.php"> Highheels </a>
                   <a href="wedges.php"> Wedges </a>
                   <a href="sendal.php"> Sendal </a>
                   <a href="flatshoes.php"> Flatshoes </a>
                   <a href="sneakers.php"> Sneakers </a>
                 </div>
              </div>

                    <a href="carabelanja.php"> CARA BELANJA </a>
                    <a href="contact us.php"> CONTACT US </a>
                         <input class="search" type="text" placeholder="cari...">
                    <a href="#"><button>Cari</button></a>
         </div>

              <hr class="pembatas"></hr>
          
</div>

        <table id = "content">


          <div id="navigation3">
            <a href="HomePage.html" class = "menuhome"> HOME</a>/
            <a href="beranda.html" class = "menuhome"> PRODUK</a>/
            <a href="wedges.html" class = "menuhome"> WEDGES</a>
          </div>

          <div id="nav">
            <h1> WEDGES </h1>
          </div>


            <tr>
    <td><center><img src="wedges/1.jpg" class="gambar"/></center></td>
    <td><center><img src="wedges/2.jpg" class="gambar"/></center></td>
    <td><center><img style="width:200px;" src="wedges/3.jpg"/></center></td>
    <td><center><img style="width:200px;" src="wedges/4.jpg"/></center></td>
            </tr>

            <tr>
            <td class="ket1"><p>W001</p></td>
            <td class="ket1"><p>W002</p></td>
            <td class="ket1"><p>W003</p></td>
            <td class="ket1"><p>W004</p></td>
            </tr>
             <tr> 
  <td class="button"><p>thinky. Rp. 140.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
  <td class="button"><p>tiny. Rp. 240.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
  <td class="button"><p>waal. Rp. 300.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
  <td class="button"><p>shame. Rp. 280.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
         </tr>

           <tr>
    <td><center><img style="width:200px;" src="wedges/5.jpg"/></center></td>
    <td><center><img style="width:200px;" src="wedges/6.jpg"/></center></td>
    <td><center><img style="width:200px;" src="wedges/7.jpg"/></center></td>
    <td><center><img style="width:200px;" src="wedges/8.jpg"/></center></td>
            </tr>
            
            <tr>
            <td class="ket1"><p>W005</p></td>
            <td class="ket1"><p>W006</p></td>
            <td class="ket1"><p>W007</p></td>
            <td class="ket1"><p>W008</p></td>
            </tr>

            <tr> 
  <td class="button"><p>boos. Rp. 198.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
  <td class="button"><p>wild. Rp. 270.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
  <td class="button"><p>glosy. Rp. 290.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
  <td class="button"><p>four. Rp. 230.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
            </tr>

           <tr>
    <td><center><img style="width:200px;" src="wedges/9.jpg"/></center></td>
    <td><center><img style="width:200px;" src="wedges/10.jpg"/></center></td>
            </tr>
            
            <tr>
            <td class="ket1"><p>W009</p></td>
            <td class="ket1"><p>W010</p></td>
            </tr>

          <tr> 
  <td class="button"><p>dick. Rp. 180.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
  <td class="button"><p>spy. Rp. 250.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
         </tr>

        </table>

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