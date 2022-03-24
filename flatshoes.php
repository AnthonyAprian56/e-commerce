<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="flatshoescss.css">
    <title>Flatshoes</title>
</head>
<body>

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
            <a href="flatshoes.html" class = "menuhome"> FLATSHOES</a>
          </div>

          <div id="nav">
            <h1> FLATSHOES</h1>
          </div>


            <tr>
    <td><img src="flatshoes/1.jpg" class="gambar"/></td>
    <td><img src="flatshoes/2.jpg" class="gambar"/></td>
    <td><img src="flatshoes/3.jpg" class="gambar"/></td>
    <td><img src="flatshoes/4.jpg" class="gambar"/></td>

            </tr>

            <tr>
            <td class="ket1"><p>F001</p></td>
            <td class="ket1"><p>F002</p></td>
            <td class="ket1"><p>F003</p></td>
            <td class="ket1"><p>F004</p></td>
            </tr>

             <tr> 
    <td class="button"><p>clar. Rp. 200.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>qwen. Rp. 222.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>nov. Rp. 255.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>fun. Rp. 189.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>

         </tr>

           <tr>
    <td><img src="flatshoes/5.jpg" class="gambar"/></td>
    <td><img src="flatshoes/6.jpg" class="gambar"/></td>
    <td><img src="flatshoes/7.jpg" class="gambar"/></td>
    <td><img src="flatshoes/8.jpg" class="gambar"/></td>
            </tr>

             <tr>
            <td class="ket1"><p>F005</p></td>
            <td class="ket1"><p>F006</p></td>
            <td class="ket1"><p>F008</p></td>
            <td class="ket1"><p>F008</p></td>
            </tr>
            
            <tr> 
    <td class="button"><p>thin. Rp. 166.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>ky. Rp. 140.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>amanda. Rp. 287.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>zoya. Rp. 166.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>

         </tr>

           <tr>
    <td><img src="flatshoes/9.jpg" class="gambar"/></td>
 
            </tr>

              <tr>
            <td class="ket1"><p>F009</p></td>
           
            </tr>

           <tr> 
    <td class="button"><p>aqui. Rp. 176.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>

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