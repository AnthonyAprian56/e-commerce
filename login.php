
<html>
<head>
    
    <title>Masuk</title>
 <link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>
   <div id = "shop">
            <center><a href="#"><img src = "Gambar/Logo/Paragraph_1.png" class="imglogo"></a></center>
        <div id="navigation2">
            <div class="dropdown">
              <a href="beranda.html" class = "dropbtn"> KATEGORI PRODUK </a>
                 <div class="dropdown-content">
                   <a href="highheels.html">Highheels</a>
                   <a href="wedges.html">Wedges</a>
                   <a href="sendal.html">Sandal</a>
                   <a href="flatshoes.html">Flatshoes</a>
                   <a href="sneakers.html">Sneaker</a>
                </div>
           </div>

            <a href="carabelanja.html" class = "menu"> CARA BELANJA </a>
            <a href="contact us.html" class = "menu"> CONTACT US </a>
            <input class="search" type="text" value ="cari...">
            <a href="#"><button>Cari</button></a>
        </div>

              <hr class="pembatas"></hr>
          
       

    </div>
    <table id="form">

         <div id="navigation3">
            <a href="HomePage.html" class = "menuhome"> HOME</a>/
            <a href="Login.html" class = "menuhome"> Masuk</a>
          </div>  
            <tr>
            <td colspan ="3" class="font"><b>Masuk</b></td>
          </tr>


          <form class="bingkai" action="proseslogin.php" method="POST"> 
          <tr>
            <td>E-mail</td>
            <td>:</td>
            <td><input class="search" name="email" type="text" placeholder="E-Mail"></td>
     </tr>

        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input class="search" name="sandi" type="password" placeholder="password"></td>
        </tr>

        <tr>
       <td><right><button class="daftar" type="submit" name="submit" value="login" style="height:15px; width:50px;"></button></right></td>
        </tr>

        <tr>
            <td>Lupa password? klik</td>
            <td href="#">disini</td>
        </tr>
        </form>
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
