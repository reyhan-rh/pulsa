<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jual_pulsa";

// Koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
