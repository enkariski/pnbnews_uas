<?php
include 'koneksi.php';

// Menentukan username dan password
$username = "enka";
$password = password_hash("password123", PASSWORD_BCRYPT); // Meng-hash password

// Query untuk menyimpan data ke database
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "Pengguna berhasil ditambahkan.";
} else {
    echo "Terjadi kesalahan: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
