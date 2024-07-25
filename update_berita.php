<?php
include 'koneksi.php'; // Pastikan koneksi database Anda ada di sini

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari formulir
    $id = $_POST['id'];
    $judul_berita = $_POST['judul_berita'];
    $isi_berita = $_POST['isi_berita'];
    $link_berita = $_POST['link_berita'];
    $kategori = $_POST['kategori'];

    // SQL untuk memperbarui data
    $sql = "UPDATE berita SET judul_berita = ?, isi_berita = ?, link_berita = ?, kategori = ? WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssi", $judul_berita, $isi_berita, $link_berita, $kategori, $id);
        if ($stmt->execute()) {
            // Redirect setelah update berhasil
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Gagal memperbarui data: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing SQL statement: " . $conn->error;
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
