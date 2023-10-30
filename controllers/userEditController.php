<?php 
// Koneksi database
include('../models/dataBaseConn.php');

// Menangkap data yang dikirim dari form
$id_user = $_POST['id_user'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];

// Update data ke database
mysqli_query($koneksi, "UPDATE user SET name='$name', nickname='$nickname', full_name='$full_name', phone_number='$phone_number' WHERE id_user='$id_user'");
// Mengalihkan halaman kembali ke index.php
header("location: /aStuff/view/admin/index.php");

?>
