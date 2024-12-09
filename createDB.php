<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname,$username,$password);

    if($connect){
        echo "Koneksi Ke MySQL berhasil <br>";
    }
    else{
        echo "Konskesi Ke MySQL gagal <br>" . mysqli_connect_error();
    }

    $sql = "CREATE DATABASE tugas_besar";
    if(mysqli_query($connect, $sql)){
        echo "Database Berhasil dibuat";
    }
    else{
        echo "Database gagal dibuat<br>" . mysqli_connect($connect);
    }

    mysqli_close($connect);
?>