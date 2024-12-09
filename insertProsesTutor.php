<?php 
    include "koneksi.php";



    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $status_pengajar = $_POST['status_pengajar'];


    $sql = "INSERT INTO tutor
            VALUES(NULL,'$nama','$email','$telp','$status_pengajar')";
    echo $sql;
    if (mysqli_query($connect, $sql)) {
        header("Location: home.php?page=tutor");

    } else {
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
        ?>
        <a href="home.php?page=tutor"> Lihat data di Tabel</a>
    <?php

    }

    mysqli_close($connect);
?>