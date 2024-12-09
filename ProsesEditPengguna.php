<?php
	include 'koneksi.php';

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
    $status = $_POST['status'];
    $id_kelas = $_POST['id_kelas'];

	$sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', email='$email', telp='$telp', status='$status', id_kelas='$id_kelas'WHERE nim='$nim'";
		 echo $sql;

		if (mysqli_query($connect, $sql)) {
			header("Location: home.php?page=pengguna");
	
		} else {
			echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
		}
	
		mysqli_close($connect);
	?>