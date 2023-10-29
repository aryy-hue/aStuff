<?php
// Koneksi ke database
include('../models/dataBaseConn.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form
    $name = $_SESSION['nickname']; // Mendapatkan name dari session
    $form_dsc = $_POST['form_dsc']; // Mendapatkan form_dsc dari form

    // Query prepared statement untuk menginput data ke dalam tabel
    $stmt = $koneksi->prepare("INSERT INTO form (id_form, name, form_dsc) VALUES (NULL, ?, ?)");
    $stmt->bind_param("ss", $name, $form_dsc);

    // Melakukan eksekusi prepared statement
    if ($stmt->execute()) {
        // Jika query berhasil dijalankan, redirect ke halaman sukses
        header("location: /aStuff/view/pages/community.php");
    } else {
        // Jika query gagal dijalankan, redirect ke halaman gagal
        header("location: /aStuff/view/pages/community.php?error=1");
    }

    // Menutup prepared statement
    $stmt->close();
}
?>
