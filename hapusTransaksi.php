<?php
	include "koneksi.php";

	$id_transaksi= $_GET['id_transaksi'];

	$query = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
	$result = mysqli_query($connect,$query);

	if ($result) {
        header("Location: home.php?page=transaksi");
 
 	}else{
 		echo "Data gagal dihapus".mysqli_error($connect);
         ?>
         <a href="home.php?page=transaksi"> Lihat data di Tabel</a>
     <?php
 	} 
  ?>