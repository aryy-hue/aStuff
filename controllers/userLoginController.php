<?php
 // Koneksi ke database
include('../models/dataBaseConn.php');
session_start();

$nickname = $_POST['nickname'];
$password = hash('sha256',$_POST['password']); // Menggunakan MD5 untuk keamanan sederhana

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE nickname='$nickname' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $_SESSION['nickname'] = $nickname;
    $_SESSION['status'] = "login";
    header("location: /aStuff/view/pages/market.php"); // Redirect ke halaman admin setelah login berhasil
} else {
    header("location: /aStuff/view/auth/login.php?status=failed"); // Redirect kembali ke halaman login jika login gagal
}
?>
