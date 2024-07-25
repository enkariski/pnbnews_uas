<!DOCTYPE html>
<html lang="en">
<?php include 'koneksi.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNBNews - Dashboard</title>
    <link rel="shortcut icon" href="img/pnb.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="logo2.png" alt="Logo"></a>
            <div class="ms-auto">
                <button class="btn btn-primary admin-btn">
                    <i class="fas fa-user"></i> Admin
                </button>
                <a href="logout.php" class='btn btn-danger btn-sm'>Logout</a>
            </div>
        </div>
        
    </nav>

    <div class="container mt-5 pt-3">
        <section id="home">
            <h2 class="mb-4">Dashboard</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="icon-container bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Dilihat</h4>
                            <p class="h2" id="userCount">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="icon-container bg-info">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Pertanyaan</h4>
                            <p class="h2" id="questionCount">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="icon-container bg-success">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Berita</h4>
                            <p class="h2" id="newsCount">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="stat-card">
                        <div class="icon-container bg-warning">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="stat-info">
                            <h4>Komentar</h4>
                            <p class="h2" id="commentCount">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="menuPilihan" class="mt-5">
            <h2 class="mb-4">Menu Pilihan</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="stat-card menu-card" data-bs-toggle="modal" data-bs-target="#addNewsModal">
                        <div class="icon-container bg-primary">
                            <i class="fas fa-plus-circle"></i>
                        </div>
                        <h4>Tambah Berita</h4>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="stat-card menu-card" data-bs-toggle="modal" data-bs-target="#viewCommentsModal">
                        <div class="icon-container bg-info">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h4>Lihat Komentar</h4>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Add News Modal -->
    <div class="modal fade" id="addNewsModal" tabindex="-1" aria-labelledby="addNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewsModalLabel">Tambah Berita Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form id="addNewsForm" action = "tambah_berita.php" method ="post">
                                <div class="mb-3">
                                    <label for="newsTitle" class="form-label">Judul Berita</label>
                                    <input type="text" class="form-control" id="newsTitle" name ="newsTitle" required>
                                </div>
                                <div class="mb-3">
                                    <label for="newsContent" class="form-label">Isi Berita</label>
                                    <textarea class="form-control" id="newsContent" rows="3" name = "newsContent" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="newsImage" class="form-label">Tambahkan Link</label>
                                    <input type="text" class="form-control" id="newsLink" name="addLink"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori Berita</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="newsCategory" id="category1" value="Akademik" checked>
                                        <label class="form-check-label" for="category1">Akademik</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="newsCategory" id="category2" value="Non Akademik">
                                        <label class="form-check-label" for="category2">Non-Akademik</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="newsCategory" id="category3" value="Olahraga">
                                        <label class="form-check-label" for="category3">Olahraga</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah Berita</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div id="newsPreview">
                                <h4>Preview Berita</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-text" id="previewTitle"></h5>
                                        <p class="card-text" id="previewContent"></p>
                                        <p class="card-text" id="previewImage"></p>
                                        <span class="badge bg-primary" id="previewCategory"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit News Modal -->
    <div class="modal fade" id="editNewsModal" tabindex="-1" aria-labelledby="editNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editNewsModalLabel">Edit Berita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form id="editNewsForm" action ="edit_berita.php" method ="post">
                                <input type="hidden" name="id" id="editNewsId">
                                    <div class="mb-3">
                                        <label for="editNewsTitle" class="form-label">Judul Berita</label>
                                        <input type="text" class="form-control" id="editNewsTitle" name="judul_berita" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editNewsContent" class="form-label">Isi Berita</label>
                                        <textarea class="form-control" id="editNewsContent" rows="3" name= "isi_berita" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editNewsImage" class="form-label">Link Berita</label>
                                        <input type="text" class="form-control" id="editNewsImage" name= "link_berita" >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Kategori Berita</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kategori_berita" id="editCategory1" value="akademik">
                                            <label class="form-check-label" for="editCategory1">
                                                Akademik
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kategori_berita" id="editCategory2" value="nonakademik">
                                            <label class="form-check-label" for="editCategory2">
                                                Non - Akademik
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kategori_berita" id="editCategory3" value="olahraga">
                                            <label class="form-check-label" for="editCategory3">
                                                Olahraga
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div id="editNewsPreview">
                                    <h4>Preview Berita</h4>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-text" id="editPreviewTitle"></h5>
                                            <p class="card-text" id="editPreviewContent"></p>
                                            <p class="card-text" id="editPreviewImage"></p>
                                            <span class="badge bg-primary" id="editPreviewCategory"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- View Comments Modal -->
    <div class="modal fade" id="viewCommentsModal" tabindex="-1" aria-labelledby="viewCommentsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewCommentsModalLabel">Lihat Komentar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="commentNewsSelect" class="form-label">Pilih Berita</label>
                        <select class="form-select" id="commentNewsSelect">
                        </select>
                    </div>
                    <div id="commentsList">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="confirmationMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="#" class="btn btn-primary" id="viewHomePageBtn">Lihat Beranda</a>
                </div>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>
<br>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Berita</th>
                <th scope="col">Isi Berita</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT id, judul_berita, isi_berita FROM berita"; 
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $no = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $no . "</th>";
                        echo "<td>" . htmlspecialchars($row['judul_berita']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['isi_berita']) . "</td>";
                        echo "<td>
                            <a href='edit_berita.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>
                         </td>";
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada berita ditemukan.</td></tr>";
                }
                $conn->close();
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/dashboard.js"></script>

    
</body>
</html>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Menambahkan event listener untuk tombol Edit
    document.querySelectorAll('.btn-warning').forEach(function (button) {
        button.addEventListener('click', function () {
            var id = this.getAttribute('data-id');
            
            // Ambil data berita dari server dengan menggunakan AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'get_news.php?id=' + id, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    
                    // Mengisi data ke dalam form modal
                    document.getElementById('editNewsId').value = data.id;
                    document.getElementById('editNewsTitle').value = data.judul_berita;
                    document.getElementById('editNewsContent').value = data.isi_berita;
                    document.getElementById('editNewsImage').value = data.link_berita;

                    // Set kategori berita
                    document.querySelector('input[name="kategori_berita"][value="' + data.kategori_berita + '"]').checked = true;
                    
                    // Update preview jika diperlukan
                    document.getElementById('editPreviewImage').src = data.link_berita;
                    document.getElementById('editPreviewTitle').textContent = data.judul_berita;
                    document.getElementById('editPreviewContent').textContent = data.isi_berita;
                    document.getElementById('editPreviewCategory').textContent = data.kategori_berita.charAt(0).toUpperCase() + data.kategori_berita.slice(1);
                }
            };
            xhr.send();
        });
    });
});
</script>
