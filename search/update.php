<?php
include "koneksi.php";
if(isset($_GET['id_barang'])):
     if(isset($_POST['bts'])):
          $stmt = $mysqli->prepare("UPDATE barang SET nama_barang=?, harga_barang=?, kategori=?, stok=? WHERE id_barang=?");
          $stmt->bind_param('sssss', $nm, $hrg, $kt, $st, $id_barang);
 
          $nm = $_POST['nm'];
          $tl = $_POST['hrg'];
          $ct = $_POST['kt'];
          $st = $_POST['st'];
          $id = $_POST['id_barang'];
 
          if($stmt->execute()):
               echo "<script>location.href='index.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     $res = $mysqli->query("SELECT * FROM biodata WHERE id=".$_GET['id']);
     $row = $res->fetch_assoc();
?>
<form method="post">
     <input type="hidden" value="<?php echo $row['id'] ?>" name="id_barang"/>
     <p><input type="text" value="<?php echo $row['nama'] ?>" name="nm"/></p>
     <p><input type="text" value="<?php echo $row['tel'] ?>" name="hrg"/></p>
     <p><input type="text" value="<?php echo $row['city'] ?>" name="kt"/></p>
     <p><input type="text" value="<?php echo $row['state'] ?>" name="st"/></p>
     <input type="submit" value="Update" name="bts"/>
</form>
<?php
endif;
?>