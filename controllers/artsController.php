<?php 
// koneksi database
include('../models/dataBaseConn.php');

// menangkap data yang di kirim dari form
$art_name = $_POST['art_name'];
$date_added = $_POST['date_added'];
$name = $_POST['name'];
$img = $_POST['img'];

// menginput data ke database
$query = "INSERT INTO arts (art_name, date_added, name, img) VALUES ('$art_name', '$date_added', '$name', '$img')";

if(mysqli_query($koneksi, $query)) {
    // Data inserted successfully, redirect to tampil.php
    header("location: /aStuff/index.php");
} else {
    // Handle the error, for example:
    echo "Error: " . mysqli_error($koneksi);
}

// Close the database connection
mysqli_close($koneksi);
?>
