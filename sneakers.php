<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="flatshoescss.css">
    <title>Sneakres</title>
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
            <a href="sneakers.html" class = "menuhome"> SNEAKERS</a>
          </div>

          <div id="nav">
            <h1> SNEAKERS</h1>
          </div>


            <tr>
    <td><img src="sneakers/1.jpg" class="gambar"/></td>
    <td><img src="sneakers/2.jpg" class="gambar"/></td>
    <td><img src="sneakers/3.jpg" class="gambar"/></td>
    <td><img src="sneakers/4.jpg" class="gambar"/></td>

            </tr>

            <tr>
            <td class="ket1"><p>SN001</p></td>
            <td class="ket1"><p>SN002</p></td>
            <td class="ket1"><p>SN003</p></td>
            <td class="ket1"><p>SN004</p></td>
            </tr>

             <tr> 
    <td class="button"><p>thinky. Rp. 155.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>abc. Rp. 149.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>thy. Rp. 120.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>inky. Rp. 240.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>

         </tr>

           <tr>
    <td><img src="sneakers/5.jpg" class="gambar"/></td>
    <td><img src="sneakers/6.jpg" class="gambar"/></td>
    <td><img src="sneakers/7.jpg" class="gambar"/></td>
    <td><img src="sneakers/8.jpg" class="gambar"/></td>
            </tr>

             <tr>
            <td class="ket1"><p>SN005</p></td>
            <td class="ket1"><p>SN006</p></td>
            <td class="ket1"><p>SN007</p></td>
            <td class="ket1"><p>SN008</p></td>
            </tr>
            
            <tr> 
    <td class="button"><p>asp. Rp. 150.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>adc. Rp. 240.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>mawa. Rp. 199.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>feet. Rp. 127.000 <a href="keranjang belanja.html"><button class="ket2">Cart</button></p></td>

         </tr>

           <tr>
    <td><img src="sneakers/9.jpg" class="gambar"/></td>
    <td><img src="sneakers/10.jpg" class="gambar"/></td>
    <td><img src="sneakers/12.jpg" class="gambar"/></td>
    <td><img src="sneakers/13.jpg" class="gambar"/></td>
            </tr>

              <tr>
            <td class="ket1"><p>SN009</p></td>
            <td class="ket1"><p>SN010</p></td>
            <td class="ket1"><p>SN011</p></td>
            <td class="ket1"><p>SN012</p></td>
            </tr>

           <tr> 
    <td class="button"><p>ty. Rp. 240.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>apel. Rp. 190.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>manggo. Rp. 119.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>
    <td class="button"><p>beer. Rp. 179.000 <a href="keranjang belanja.html"> <button class="ket2">Cart</button></p></td>

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