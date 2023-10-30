<?php 
// Koneksi database
include('../models/dataBaseConn.php');

// Menangkap data yang dikirim dari form
$id_form = $_POST['id_form'];
$name = $_POST['name'];
$form_dsc = $_POST['form_dsc'];

// Prepare the SQL query
$query = "UPDATE form SET name=?, form_dsc=? WHERE id_form=?";
$stmt = mysqli_prepare($koneksi, $query);

// Bind the parameters and execute the statement
mysqli_stmt_bind_param($stmt, "ssi", $name, $form_dsc, $id_form);
if (mysqli_stmt_execute($stmt)) {
    // Jika update berhasil, alihkan kembali ke index.php
    header("location: /aStuff/view/admin/community.php");
} else {
    // Handle errors if the update fails
    die("Update failed: " . mysqli_error($koneksi));
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
