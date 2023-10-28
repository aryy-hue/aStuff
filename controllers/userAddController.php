<?php 
// koneksi database
include('../models/dataBaseConn.php');
 
// menangkap data yang di kirim dari form
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];


		
		if($confirm_password === $password){		
			// menginput data ke database
			mysqli_query($koneksi,"insert into user values('','$name','$nickname','$password','','$full_name','$phone_number')");
			header("location:/aStuff/view/pages/market.php");
		}else{
			header("location:/aStuff/view/auth/register.php?alert=gagal_ukuran");
		}
 
?>