<?php
	include "koneksi.php";

	$nim= $_GET['nim'];

	$query = "DELETE FROM mahasiswa WHERE nim='$nim'";
	$result = mysqli_query($connect,$query);

	if ($result) {
		header("Location: home.php?page=pengguna");
 	}else{
 		echo "Data gagal dihapus".mysqli_error($connect);
		 ?>
 	<a href="home.php?page=pengguna"> Lihat data di Tabel</a>
 <?php
 	} 
  ?>
