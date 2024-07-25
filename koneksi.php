<?php
// Konfigurasi koneksi ke database MySQL
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "login_system";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
