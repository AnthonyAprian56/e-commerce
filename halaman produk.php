<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="halaman produk.css">
    <title>Wedges</title>
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

            <tr>
    <td><center><img style="width:200px;" src="highheels/1.png"/></center></td>
    <td><center><img style="width:200px;" src="highheels/2.png"/></center></td>
    <td><center><img style="width:200px;" src="highheels/3.png"/></center></td>
    <td><center><img style="width:200px;" src="highheels/4.png"/></center></td>
            </tr>

             <tr> 
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td>
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td>
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td> 
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td> 
         </tr>

           <tr>
    <td><center><img style="width:200px;" src="highheels/5.png"/></center></td>
    <td><center><img style="width:200px;" src="highheels/6.png"/></center></td>
    <td><center><img style="width:200px;" src="highheels/7.png"/></center></td>
    <td><center><img style="width:200px;" src="highheels/8.png"/></center></td>
            </tr>
            
             <tr> 
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td>
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td>
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td> 
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td> 
         </tr>
           <tr>
    <td><center><img style="width:200px;" src="highheels/9.png"/></center></td>
    <td><center><img style="width:200px;" src="highheels/10.png"/></center></td>
    <td><center><img style="width:200px;" src="highheels/11.jpg"/></center></td>
    <td><center><img style="width:200px;" src="highheels/12.jpg"/></center></td>
            </tr>
            
             <tr> 
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td>
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td>
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td> 
  <td style="text-align: center"><button style="background-color:lightgray">Cart</button></td> 
         </tr>

        </table>


         <footer id="footer">
    <h4>Contact Us:</h4>
    <h5><img style="width :25px"src="instagram.png">                      Gee_Olshop</h5>
    <h5><img style="width :25px"src="copyright.png">                      Copy Right</h5>
    <h5> Gee Olshop 2017</h5>
    <h5>0821376298127</h5>
    <h5>0821751623</h5>
        </footer> 


      



    </body>
</html>