<?php 


include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: home.php?page=dash");
}

$username = $_POST['username'];
$password = md5($_POST['password']); //md5 untuk ke database
$remember = $_POST["rememberme"];
  echo $remember;
if($remember=='rememberme')
    {
    $hour = time() + 3600 * 24 * 30;
        setcookie('username', $username, $hour);
        setcookie('password', $_POST['password'], $hour);
        echo "oke ".$hour ;
    }

    if(!isset($_COOKIE['username'])) {
        echo "Cookie named '" . $username . "' is not set!";
    } else {
        echo "Cookie '" . $username . "' is set!<br>";
        echo "Value is: " . $_COOKIE['username'];
        echo "Value is: " . $_COOKIE['password'];
    }

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $sql);

if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
   
   header("Location: home.php?page=dash");
} else {
    echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
  
    header("Location: login.php");
}
 
?>