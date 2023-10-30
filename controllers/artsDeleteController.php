<?php 
// koneksi database
include('../models/dataBaseConn.php');

session_start();

// menangkap data id yang di kirim dari url
$id_art = $_GET['id_art'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from arts where id_art='$id_art'");

 
// mengalihkan halaman kembali ke index.php
header("location: /aStuff/view/admin/arts.php");
 
?>