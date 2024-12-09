<?php 
    include "koneksi.php";

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $id_kelas = $_POST['id_kelas'];
    $status = $_POST['status'];


    $sql = "INSERT INTO mahasiswa(nim, nama,email, telp,id_kelas,status)
            VALUES('$nim','$nama','$email','$telp','$id_kelas','$status')";

    if (mysqli_query($connect, $sql)) {
        header("Location: home.php?page=pengguna");

    } else {
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
        ?>
        <a href="index.php?page=pengguna"> Lihat data di Tabel</a>
    <?php
    }

    mysqli_close($connect);
?>