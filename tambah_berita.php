<?php
session_start();
include 'koneksi.php'; // Ganti dengan path ke file koneksi Anda

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $title = $_POST['newsTitle'];
    $content = $_POST['newsContent'];
    $linkBerita = $_POST['addLink'];
    $category = $_POST['newsCategory'];
  

    // Cek apakah pengguna sudah login
    // if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    //     die("Anda harus login untuk menambah berita.");
    // }
    
    // Persiapkan dan jalankan query untuk memasukkan berita ke database
    $stmt = $conn->prepare("INSERT INTO berita (judul_berita, isi_berita, link_berita, kategori) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $content, $linkBerita, $category);
    
    if ($stmt->execute()) {
        $newsId = $stmt->insert_id; // Ambil ID berita yang baru dimasukkan
        header ('Location: dashboard.php');
        exit();
    } else {
        echo "Gagal menambahkan berita.";
    }

    $stmt->close();
    $conn->close();
}
?>
