<?php 
// koneksi database
include('../models/dataBaseConn.php');

// menangkap data yang di kirim dari form
$art_name = $_POST['art_name'];
$date_added = $_POST['date_added'];
$name = $_POST['name'];
$owner = $_POST['name'];
$price = $_POST['price'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','webp');
$filename = $_FILES['img']['name'];
$ukuran = $_FILES['img']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$maxFileSize = 20 * 1024 * 1024; 

if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < $maxFileSize){		
		$img = $rand.'_'.$filename;
		move_uploaded_file($_FILES['img']['tmp_name'], '../public/uploads/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO arts VALUES(' ','$art_name', '$date_added','$name', '$img' , '$price' , '$owner')");
		header("location:/aStuff/view/pages/market.php");
	}else{
		header("location:/aStuff/index.php?alert=gagal_ukuran");
	}
}


// Close the database connection
mysqli_close($koneksi);
?>
