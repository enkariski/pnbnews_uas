<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNBNews - Event Kampus</title>
    <link rel="shortcut icon" href="img/pnb.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="./css/tentangkampus.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container nav-container">
            <a class="navbar-brand" href="#"><img src="./logo2.png" alt="Logo"></a>
            <div class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <span class="navbar-toggler-icon"></span>
            </div>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Berita Kampus <i class="dropdown-toggle" width="20px"></i></a>
                        <ul class="dropdown-menu" data-aos="fade-down">
                            <li><a class="dropdown-item" href="./academicnews.php">Akademik</a></li>
                            <li><a class="dropdown-item" href="./noacademicnews.php">Non - Akademik</a></li>
                            <li><a class="dropdown-item" href="./activity.php">Mahasiswa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="./event.php">Event Kampus</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Tentang Kami <i class="dropdown-toggle"></i></a>
                        <ul class="dropdown-menu" data-aos="fade-down">
                            <li><a class="dropdown-item" href="./about.php">Tentang Kampus</a></li>
                            <li><a class="dropdown-item" href="./contact.php">Kontak</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a href="./login.php" target="_blank" class="btn btn-primary" id="login-admin">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">PNB News</h5>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item item-nav" data-aos="fade-right"><a class="link-nav" href="./index.php">Beranda</a></li>
                <li class="nav-item item-nav dropdown" data-aos="fade-right">
                    <a class="link-nav dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Berita Kampus</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./academicnews.php">Akademik</a></li>
                        <li><a class="dropdown-item" href="./noacademicnews.php">Non - Akademik</a></li>
                        <li><a class="dropdown-item" href="./activity.php">Mahasiswa</a></li>
                    </ul>
                </li>
                <li class="nav-item item-nav" data-aos="fade-right"><a class="link-nav" href="./event.php">Event Kampus</a></li>
                <li class="nav-item item-nav dropdown" data-aos="fade-right">
                    <a class="link-nav dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tentang Kami</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./about.php">Tentang Kampus</a></li>
                        <li><a class="dropdown-item" href="./contact.php">Kontak</a></li>
                    </ul>
                </li>
                <li class="nav-item item-nav" data-aos="fade-right">
                    <a href="./login.php" target="_blank" class="btn btn-primary" id="login-offcanvas">Login</a>
                </li>
            </ul>
        </div>
    </div>
    
    <br><br><br><br>
    <div class="container">
        <div class="left-section">
            <h2>Tentang Kampus</h2> <br>
            <p>Direktur Politeknik Negeri Bali</p>
            <h3>I Nyoman Abdi, SE., M.eCom</h3>
            <p>Puji syukur kehadapan Ida Sang Hyang Widi Wasa saya panjatkan, karena atas segala rahmat dan karuniaNya kami segenap sivitas akademika Politeknik Negeri Bali (PNB) dapat menunaikan kewajiban turut berkontribusi dalam meningkatkan peran PNB untuk mewujudkan visi dan misi sebagai Lembaga pendidikan Vokasi Terdepan yang menghasilkan lulusan yang Profesional yang memiliki daya saing Internasional pada Tahun 2025.</p>
            <img src="./img/direktur.png" alt="Director Image">
        </div>
        <div class="right-section">
            <h2>Visi</h2>
            <p>Menjadi Lembaga Pendidikan Tinggi Vokasi Terdepan Penghasil Lulusan Profesional Berdaya Saing Internasional Pada Tahun 2025</p>
            <h2>Misi</h2>
            <ul>
                <li>Menyelenggarakan pendidikan vokasi yang dapat diakses secara merata dan merata bagi masyarakat</li>
                <li>Menyelenggarakan pendidikan vokasi yang berkarakter bangsa dengan standar mutu nasional dan regional di Asia-Pasifik</li>
                <li>Menyelenggarakan penelitian bertaraf internasional di bidang ilmu dan teknologi terapan</li>
                <li>Menyelenggarakan pengabdian kepada masyarakat berbasis penerapan ilmu pengetahuan dan teknologi</li>
                <li>Menyelenggarakan kerjasama di kawasan ASPAC</li>
                <li>Mengembangkan sistem tata kelola yang inovatif, transparan, dan akuntabel yang didukung oleh sumber daya berstandar internasional</li>
                <li>Membangun keunggulan institusi berorientasi pariwisata</li>
            </ul>
        </div>
    </div>




    <br/><br/><br/>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white">
        <div class="container p-4">
            <div class="row">
                <!-- Quick Link -->
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h5>Quick Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Beranda</a></li>
                        <li><a href="#" class="text-white">Berita Kampus</a></li>
                        <li><a href="#" class="text-white">Event Kampus</a></li>
                        <li><a href="#" class="text-white">Login</a></li>
                    </ul>
                </div>
                <!-- Politeknik Negeri Bali -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Portal PNB News</h5>
                    <p>
                        Uluwatu St No.45, Jimbaran, South Kuta,<br>
                        Badung Regency, Bali 80361<br>
                        <i class="fas fa-phone"></i> +62 (0361)701981<br>
                        <i class="fas fa-envelope"></i> poltek@pnb.ac.id
                    </p>
                </div>
                <!-- Follow Us -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Google Maps -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.865570572184!2d115.15991207556634!3d-8.798697991253734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244c13ee9d753%3A0x6c05042449b50f81!2sPoliteknik%20Negeri%20Bali!5e0!3m2!1sid!2sid!4v1720873274473!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 All rights reserved by <b>Enka Riski</b>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="./js/landingpage.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
