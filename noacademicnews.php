<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNBNews - Non-Akademik</title>
    <link rel="shortcut icon" href="img/pnb.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="./css/pagecopy.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm" id="mainNavbar">
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
                        <a class="nav-link" href="./about.php">Tentang Kami</a>
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
    
    <br>
    <!-- Berita Non-Akademik -->
    <section id="berita-terkini" class="container mt-5" data-aos="fade-up">
        <h2 class="section-title">Berita Non-Akademik</h2>
        <div class="row">
        <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaNon-Akademik/berita1.jpg" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Non-Akademik</button>
                        <h5 class="card-title">LAWATAN KOLABORASI INTERNATIONAL COMMUNITY SERVICE POLITEKNIK BANTING MALAYSIA : BIODIVERSITY AND GEOECOTOURISM YOUTH ENGAGEMENT 2024</h5>
                                <i class="fa-solid fa-calendar-days"></i> 08/07/2024
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Dalam upaya memperkuat hubungan pendidikan dan kolaborasi internasional, Politeknik Banting Selangor Malaysia, Kolej Komuniti Sabak Bernam dan Kolej Komuniti Kuala Langat Slangor,</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaNon-Akademik/berita2.jpg" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Non-Akademik</button>
                        <h5 class="card-title">DELEGASI OKLAHOMA STATE UNIVERSITY BERKUNJUNG KE KAMPUS PNB</h5>
                                <i class="fa-solid fa-calendar-days"></i> 27/06/2024
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Delegasi dari Oklahoma State University (OSU), Amerika Serikat, mengunjungi Politeknik Negeri Bali (PNB) pada hari Kamis, 27 Juni 2024, sebagai bagian dari rangkaian kunjungan resmi mereka ke Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi (Kemendikbudritek) serta beberapa perguruan tinggi ternama di Jakarta </p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaNon-Akademik/berita3.jpg" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Non-Akademik</button>
                        <h5 class="card-title">FGD PROGRAM KARTU PRAKERJA TAHUN 2024 : SUKES DIGELAR SECARA HYBRID</h5>
                                <i class="fa-solid fa-calendar-days"></i> 05/06/2024
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Forum Group Discussion (FGD) untuk laporan awal Program Kartu Prakerja Tahun 2024, berhasil dilaksanakan secara hybrid pada hari ini, Rabu 5 Juni 2024, bertempat di Royal Tulip Springhill Resort, Jimbaran. Acara yang diikuti oleh 25 reviewer dan dibuka oleh Wakil Direktur Bidang Kerjasama.</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaNon-Akademik/berita4.jpg" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Non-Akademik</button>
                        <h5 class="card-title">POLITEKNIK NEGERI BALI DAN THE APURVA KEMPINSKI BALI TEKEN MOA UNTUK MENINGKATKAN SDM INDUSTRI PERHOTELAN</h5>
                                <i class="fa-solid fa-calendar-days"></i> 03/04/2024
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Rabu, 3 April 2024, Jurusan Pariwisata Politeknik Negeri Bali dan The Apurva Kempinski Bali melaksanakan penandatanganan Memorandum of Agreement (MoA) yang akan memperkuat kerjasama dalam pengembangan sumber daya manusia di industri perhotelan.</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaNon-Akademik/berita5.jpg" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Non-Akademik</button>
                        <h5 class="card-title">CIMB NIAGA DAN PNB TANDATANGANI MOU DAN MOA UNTUK PENGEMBANGAN PENDIDIKAN DAN LITERASI KEUANGAN.</h5>
                                <i class="fa-solid fa-calendar-days"></i> 24/01/2024
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Dalam upaya untuk meningkatkan akses literasi keuangan dan memberikan kontribusi positif bagi pengembangan pendidikan, CIMB Niaga telah menjalin kemitraan strategis dengan Politeknik Negeri Bali (PNB), melalui penandatanganan Memorandum of Understanding (MoU) dan Memorandum of Agreement (MoA). </p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./img/BeritaNon-Akademik/berita6.jpg" class="card-img-top" alt="Berita 1">
                    <div class="card-body">
                        <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:10px;" >Non-Akademik</button>
                        <h5 class="card-title">PROF. XIE KANG : PROSPEK KERJA SAMA NANCHANG NORMAL UNIVERSITY-CHINA DAN PNB, MEMBENTUK JEMBATAN BUDAYA DAN PENDIDIKAN INTERNASIONAL.</h5>
                                <i class="fa-solid fa-calendar-days"></i> 28/11/2023
                                <i style="margin-left:20px;" class="fa-solid fa-user" ></i> Admin
                                <i style="margin-left:20px;" class="fa-solid fa-comment"></i> Comments Off
                                <br><br>
                        <p class="card-text">Hari ini, 28 Nopember 2023 Politeknik Negeri Bali (PNB) menyambut kedatangan Wakil Rektor Nanchang Normal University-China, Prof. Xie Kang, beserta delegasi yang terdiri dari para pemimpin akademis dan peneliti universitas tersebut.</p>
                        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <script>
        AOS.init();
        
    </script>
</body>
</html>
