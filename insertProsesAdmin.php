<?php 
    include "koneksi.php";


    $username = $_POST['username'];
    $password =md5($_POST['password']);


    $sql = "INSERT INTO user
            VALUES(NULL,'$username','$password')";

    if (mysqli_query($connect, $sql)) {
        header("Location: home.php?page=admin");
    } else {
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>