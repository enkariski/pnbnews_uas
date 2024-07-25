<?php
include 'koneksi.php';

// Cek jika ada parameter ID yang dikirimkan
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Pastikan ID adalah angka yang valid
    if ($id > 0) {
        // Siapkan statement untuk menghapus berita dari database
        $sql = "DELETE FROM berita WHERE id = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "Error preparing SQL statement: " . $conn->error;
        }
    } else {
        echo "Invalid ID.";
    }
} else {
    echo "ID not specified.";
}

// Tutup koneksi dan arahkan kembali
$conn->close();
header("Location: dashboard.php"); // Ganti dengan nama file PHP Anda
exit();
?>
