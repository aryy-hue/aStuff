<?php 
// koneksi database
include('../models/dataBaseConn.php');


session_start(); // Memulai session

// Memeriksa apakah pengguna telah login
if(isset($_SESSION['nickname'])){
    // Ambil nilai dari session untuk digunakan dalam query
    $nickname = $_SESSION['nickname'];
    
    // Memperoleh data dari formulir
    $art_name = $_POST['art_name'];
    $date_added = $_POST['date_added'];
    $name = $_POST['name']; 
    $owner = $_POST['name']; // Misalnya, owner seni diambil dari session pengguna yang telah login
    $price = $_POST['price'];
    $dsc = $_POST['dsc'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif','webp');
    $filename = $_FILES['img']['name'];
    $ukuran = $_FILES['img']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $maxFileSize = 20 * 1024 * 1024; 

    if(!in_array($ext,$ekstensi) ) {
        header("location:index.php?alert=gagal_ekstensi");
    } else {
        if($ukuran < $maxFileSize){        
            $img = $rand.'_'.$filename;
            move_uploaded_file($_FILES['img']['tmp_name'], '../public/uploads/'.$rand.'_'.$filename);
            // Menjalankan query untuk menambahkan seni ke database, termasuk nickname dari session
			mysqli_query($koneksi, "INSERT INTO arts (art_name, date_added, name, owner, img, price, nickname , dsc) VALUES ('$art_name', '$date_added', '$name', '$owner', '$img', '$price', '$nickname', '$dsc')");
            header("location:/aStuff/view/pages/market.php");
        } else {
            header("location:/aStuff/index.php?alert=gagal_ukuran");
        }
    }
} else {
    // Jika pengguna belum login, mungkin alihkan mereka ke halaman login atau tampilkan pesan lainnya.
    header("location:/aStuff/index.php?alert=not_logged_in");
}



// Close the database connection
mysqli_close($koneksi);
?>
