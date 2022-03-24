<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="highheelscss.css">
    <title>Highheels</title>
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
            <a href="HomePage.php"> HOME </a>/
            <a href="beranda.php"> PRODUK </a>/
            <a href="highheels.php"> HIGHHEELS </a>
           </div>

           <div id="nav">
            <h2> HIGHHEELS </h2>
           </div>

            <tr>

            <td> <img src="highheels/1.jpg" class="gambar"> </td>
             <td> <img src="highheels/2.jpg" class="gambar"> </td>           
            <td> <img src="highheels/3.jpg" class="gambar"> </td>
            <td> <img src="highheels/4.jpg" class="gambar"> </td>
            </tr>

            <tr>
               <td class="ket1"><p>H001</p></td>
               <td class="ket1"><p>H002</p></td> 
               <td class="ket1"><p>H003</p></td>
               <td class="ket1"><p>H004</p></td> 
            </tr>


           <tr> 
<td class="button"><p>thinky. Rp. 140.000  <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
<td class="button"><p>cross. Rp. 270.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
<td class="button"><p>funny. Rp. 300.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
<td class="button"><p>uyee. Rp. 450.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
         </tr>

            <tr>

            <td> <img src="highheels/5.jpg" class="gambar"> </td>
             <td> <img src="highheels/6.jpg" class="gambar"> </td>           
            <td> <img src="highheels/7.jpg" class="gambar"> </td>
            <td> <img src="highheels/8.jpg" class="gambar"> </td>
            </tr>
            
            <tr>
               <td class="ket1"><p>H005</p></td>
               <td class="ket1"><p>H006</p></td> 
               <td class="ket1"><p>H007</p></td>
               <td class="ket1"><p>H008</p></td> 
            </tr>


           <tr> 
<td class="button"><p>teen. Rp. 340.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
<td class="button"><p>faw. Rp. 200.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
<td class="button"><p>lipt. Rp. 110.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
<td class="button"><p>brows. Rp. 370.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
         </tr>


             <tr>

            <td> <img src="highheels/9.jpg" class="gambar"> </td>
             <td> <img src="highheels/10.jpg" class="gambar"> </td>           
            <td> <img src="highheels/11.jpg" class="gambar"> </td>
            <td> <img src="highheels/12.jpg" class="gambar"> </td>
            </tr>
            
            <tr>
               <td class="ket1"><p>H009</p></td>
               <td class="ket1"><p>H010</p></td> 
               <td class="ket1"><p>H011</p></td>
               <td class="ket1"><p>H012</p></td> 
            </tr>


           <tr> 
<td class="button"><p>fess. Rp. 340.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
<td class="button"><p>traw. Rp. 200.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
<td class="button"><p>kew. Rp. 110.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
<td class="button"><p>yewood. Rp. 370.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
         </tr>

      </table>


         <footer id="footer">
    <h4>Contact Us:</h4>
    <h5><img style="width :25px"src="instagram.png">                      Gee_Olshop</h5>
    <h5>0821376298127</h5>
    <h5>0821751623</h5>
        </footer> 


      



    </body>
</html> 