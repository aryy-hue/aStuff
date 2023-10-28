<?php
session_start();
session_destroy(); // Menghapus semua data sesi

header("location: /aStuff/view/auth/login.php"); // Redirect ke halaman login setelah logout
?>
