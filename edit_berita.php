<?php
include 'koneksi.php'; // Pastikan koneksi database Anda ada di sin
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $data = mysqli_query($conn, "SELECT * FROM berita WHERE id='$id'");

        if ($data && mysqli_num_rows($data) > 0) {
            $d = mysqli_fetch_array($data);
    ?>
    
            <form method="post" action="update_berita.php">
                <table>
                    <tr>
                        <td>Judul Berita</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($d['id'], ENT_QUOTES, 'UTF-8'); ?>">
                            <input type="text" name="judul_berita" value="<?php echo htmlspecialchars($d['judul_berita'], ENT_QUOTES, 'UTF-8'); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Isi Berita</td>
                        <td><input type="text" name="isi_berita" value="<?php echo htmlspecialchars($d['isi_berita'], ENT_QUOTES, 'UTF-8'); ?>"></td>
                    </tr>
                    <tr>
                        <td>Link Berita</td>
                        <td><input type="text" name="link_berita" value="<?php echo htmlspecialchars($d['link_berita'], ENT_QUOTES, 'UTF-8'); ?>"></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td><input type="text" name="kategori" value="<?php echo htmlspecialchars($d['kategori'], ENT_QUOTES, 'UTF-8'); ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>
    <?php 
        } else {
            echo "Data siswa tidak ditemukan.";
        }
        mysqli_close($conn);
    } else {
        echo "ID tidak ditemukan.";
    }
    ?>
</body>
</html>
