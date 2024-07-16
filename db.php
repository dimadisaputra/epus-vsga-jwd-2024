<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epus";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo"Koneksi Berhasil";
?>
