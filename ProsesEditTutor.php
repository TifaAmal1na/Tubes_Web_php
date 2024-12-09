<?php 
    include "koneksi.php";

    $nip=$_POST['id'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $telp=$_POST['telp'];
    $status_pengajar=$_POST['status_pengajar'];

	$sql = "UPDATE tutor SET nama='$nama', email ='$email', telp='$telp', status_pengajar='$status_pengajar'  WHERE nip='$nip'";
    echo $sql;
    if (mysqli_query($connect, $sql)) {
        header("Location: home.php?page=tutor");

    } else {
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>