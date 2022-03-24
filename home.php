<? 
session_start();
?>
<html>
<head>
    <title>Home Page</title>
     <link rel="stylesheet" type="text/css" href="home.css">
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

<div id="Line"></div>
<table>
  <div class="slideshow-container">
  <div class="mySlides fade">
  <center><img src="Gambar/_170321211248_promotion banner_1200.jpg" style="width:100%"></center>
  
</div>

<div class="mySlides fade">
  <center><img src="Logo\Image_2.png" style="width:50%"></center>

</div>

<div class="mySlides fade">
  <center><img src="Logo\Image_1.png" style="width:50%"></center>

</div>
</table>
</div>
<br>

<div style="text-align:center">
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


<table id="content">
  <tr>
    <td><center><img style="width:200px;" src="Logo\Image_1.png"/></center></td>
    <td><center><img style="width:200px;" src="Logo\Image_2.png"/></center></td>
    <td><center><img style="width:200px;" src="Logo\Image_3.png"/></center></td>
  </tr>
  <tr> 
  <td class ="description">Sepatu</td>
  <td class ="description"><button style="background-color:lightgray">Cart</button></td>
 <td class ="description"><button style="background-color:lightgray">Cart</button></td>
  </tr>
  
</table>

  <div id="footer">
    <div>Contact Us:<div>
    <div><img style="width :25px"src="Logo/insta.png">Gee_Olshop</div>
    <div>0821376298127</div>
    <div>0821751623</div>
    </div>   
  </div>
</body>
</html>