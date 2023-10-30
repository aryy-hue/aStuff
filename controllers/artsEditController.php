<?php 
// Koneksi database
include('../models/dataBaseConn.php');

// Prepare and bind the SQL query
$query = "UPDATE arts SET art_name=?, date_added=?, price=?, owner=?, nickname=?, dsc=? WHERE id_art=?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "ssdsssi", $art_name, $date_added, $price, $owner, $nickname, $dsc, $id_art);

// Escape user inputs for security and set the variables
$art_name = mysqli_real_escape_string($koneksi, $_POST['art_name']);
$date_added = mysqli_real_escape_string($koneksi, $_POST['date_added']);
$price = mysqli_real_escape_string($koneksi, $_POST['price']);
$owner = mysqli_real_escape_string($koneksi, $_POST['owner']);
$nickname = mysqli_real_escape_string($koneksi, $_POST['nickname']);
$dsc = mysqli_real_escape_string($koneksi, $_POST['dsc']);
$id_art = mysqli_real_escape_string($koneksi, $_POST['id_art']);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    // Redirect back to index.php if the update was successful
    header("location: /aStuff/view/admin/index.php");
} else {
    // Handle errors if the update fails
    die("Update failed: " . mysqli_error($koneksi));
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
