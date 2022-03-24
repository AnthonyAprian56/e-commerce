
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="HomePage.css">
    <title>Homepage</title>
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


        
      <table id = "content">
        
      <div id="navigation3">
        <a href="HomePage.php" class = "menuhome"> HOME</a>
      </div>



  <div class="slideshow-container">
  <div class="">
  <center><a href="#"><img src="Gambar\Sampah\slideshow1.jpg"></a></center>
  
</div>

<div class="mySlides fade">
  <center><img src=""></center>

</div>

<div class="mySlides fade">
  <center><img src=""></center>

</div>
</div>
<br>

<div class="titik">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

          <div id="nav">
            <p>Produk Terlaris</p>
          </div>

             <tr>
    <td class="tdgambar"><img src="Gambar/highheels/1.jpg" class="gambar"/></td>
    <td class="tdgambar"><img src="Gambar/flatshoes/2.jpg" class="gambar"/></td>
    <td class="tdgambar"><img src="Gambar/sendal/3.jpg" class="gambar"/></td>
    <td class="tdgambar"><img src="Gambar/wedges/4.jpg" class="gambar"/></td>
            </tr>

            <tr>
            <td class="ket1"><p>H084</p></td>
            <td class="ket1"><p>H09P</p></td>
            <td class="ket1"><p>H10P</p></td>
            <td class="ket1"><p>H11P</p></td>
            </tr>

         <tr>   
  <td class="button"><p>thinky. Rp. 140.000 <a href="keranjang belanja.html"><button class="ket2">Cart</button></a></p></td>
  <td class="button"><p>thinky. Rp. 120.000 <a href="keranjang belanja.html"><button class="ket2">Cart</button></a></p></td>
  <td class="button"><p>thinky. Rp. 120.000 <a href="keranjang belanja.html"><button class="ket2">Cart</button></a></p></td>
  <td class="button"><p>thinky. Rp. 120.000 <a href="keranjang belanja.html"><button class="ket2">Cart</button></a></p></td> 
         </tr>

          <tr>
    <td class="tdgambar"><img src="Gambar/sneakers/5.jpg" class="gambar"/></td>
    <td class="tdgambar"><img src="Gambar/sendal/6.jpg" class="gambar"/></td>
    <td class="tdgambar"><img src="Gambar/sneakers/7.jpg" class="gambar"/></td>
    <td class="tdgambar"><img src="Gambar/wedges/2.jpg" class="gambar"/></td>
          </tr>
            
              <tr>
            <td class="ket1"><p>H084</p></td>
            <td class="ket1"><p>H09P</p></td>
            <td class="ket1"><p>H10P</p></td>
            <td class="ket1"><p>H11P</p></td>
            </tr>

         <tr> 
  <td class="button"><p>thinky. Rp. 120.000 <a href="keranjang belanja.html"><button class="ket2">Cart</button></a></p></td>
  <td class="button"><p>thinky. Rp. 120.000 <a href="keranjang belanja.html"><button class="ket2">Cart</button></a></p></td>
  <td class="button"><p>thinky. Rp. 120.000 <a href="keranjang belanja.html"><button class="ket2">Cart</button></a></p></td>
  <td class="button"><p>thinky. Rp. 120.000 <a href="keranjang belanja.html"><button class="ket2">Cart</button></a></p></td>
         </tr>
</table>

<hr class="pembatas2"></hr>

  <table>
    <tr>
      <td><a href="carabelanja.php"><img src="New folder/belanja.jpg"class= "contentbawah"/></a></td>
      <td><a href=""><img src="Gambar/Sampah/follow.jpg"class= "contentbawah"/></a></td>
      <td><a href=""><img src="New folder/beauty blog.jpg"class= "contentbawah"/></a></td>
    </tr>
  </table>


  <!--footer-->
         <footer>
           <div class="footerkiri">
             <h4>Contact Us:</h4>
             <h5>0821376298127</h5>
             <h5>0821751623</h5>
          </div>

    <div class="footertengah"><h5><img src="Gambar\Logo\insta.png">Gee_Olshop</h5></div>

      <div class="footerkanan">
        <p><img src="New folder\Group_1.png"/></p>
        <p><img src="New folder\Text_6.png"/></p>
      </div>

      <div class="clear"></div>
    
        </footer> 


      



    </body>
</html> 