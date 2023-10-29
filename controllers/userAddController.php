<?php 
// koneksi database
include('../models/dataBaseConn.php');

// menangkap data yang di kirim dari form
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$password = hash('sha256', $_POST['password']);
$confirm_password = hash('sha256',$_POST['confirm_password']);
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];

if($confirm_password === $password) {		
    // Mengunggah gambar ke folder dan menyimpan nama file dalam session
    $targetDir = "/aStuff/public/img/";
    $photo_profile = isset($_FILES['photo_profile']['name']) ? $_FILES['photo_profile']['name'] : 'highlight.jpg';
    $targetFilePath = $targetDir . $photo_profile;

    move_uploaded_file($_FILES['photo_profile']['tmp_name'], $targetFilePath);
    // Menginput data ke database
    mysqli_query($koneksi,"insert into user values('','$name','$nickname','$password','$targetFilePath','$full_name','$phone_number')");
    header("location:/aStuff/view/pages/market.php");
} else {
    header("location:/aStuff/view/auth/register.php?alert=gagal_ukuran");
}
?>