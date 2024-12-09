<?php
	include "koneksi.php";

	$nip= $_GET['nip'];

	$query = "DELETE FROM tutor WHERE nip='$nip'";
	$result = mysqli_query($connect,$query);

	if ($result) {
		header("Location: home.php?page=tutor");
 	}else{
 		echo "Data gagal dihapus".mysqli_error($connect);
		 ?>
		 <a href="home.php?page=tutor"> Lihat data di Tabel</a>
	 <?php
 	} 
  ?>