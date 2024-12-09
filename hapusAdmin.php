<?php
	include "koneksi.php";

	$id= $_GET['id'];

	$query = "DELETE FROM user WHERE id='$id'";
	$result = mysqli_query($connect,$query);

	if ($result) {
        header("Location: home.php?page=admin");
 
 	}else{
 		echo "Data gagal dihapus".mysqli_error($connect);
         ?>
         <a href="home.php?page=admin"> Lihat data di Tabel</a>
     <?php
 	} 
  ?>