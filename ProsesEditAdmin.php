<?php
	include 'koneksi.php';

	$id = $_POST['id'];
	$username = $_POST['username'];
    $password =md5($_POST['password']);

	$sql = "UPDATE user SET username='$username', password='$password' WHERE id='$id'";
		
		if (mysqli_query($connect, $sql)) {
			header("Location: home.php?page=admin");
	
		} else {
			echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
		}
	
		mysqli_close($connect);
	?>