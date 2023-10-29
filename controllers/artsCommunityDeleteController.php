<?php 
// koneksi database
include('../models/dataBaseConn.php');

session_start();

// menangkap data id yang di kirim dari url
$id_form = $_GET['id_form'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from form where id_form='$id_form'");

 
// mengalihkan halaman kembali ke index.php
header("location: /aStuff/view/pages/community.php");
 
?>