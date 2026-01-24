<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Halo Dokumen</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <style>

/* Card Styling */
        .testimonial-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            background: #fff;
            padding: 30px;
            height: 100%;
            margin-bottom: 20px;
        }
        
        .profile-img-top {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        /* Merapikan Slider Container */
        .slider-wrapper {
            position: relative;
            padding: 0 60px; /* Ruang kosong untuk tombol di kiri-kanan */
        }

        /* Merapikan Tombol Navigasi */
        .carousel-control-prev, 
        .carousel-control-next {
            width: 45px;
            height: 45px;
            background-color: #0d6efd;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
            /* Memastikan tombol benar-benar simetris di luar alur kartu */
        }

        .carousel-control-prev { left: 0; }
        .carousel-control-next { right: 0; }

        /* Mengatur ukuran icon di dalam tombol agar pas di tengah */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 20px;
            height: 20px;
        }

        /* Indikator Titik di Bawah (Opsional agar lebih rapi) */
        .carousel-indicators {
            bottom: -50px;
        }
        .carousel-indicators [data-bs-target] {
            background-color: #0d6efd;
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .vertical-steps {
        position: relative;
        padding-left: 20px; /* Ruang untuk garis dan lingkaran */
        }

        /* Garis Vertikal Utama */
        .vertical-steps::before {
        content: "";
        position: absolute;
        top: 5px;
        bottom: 5px;
        left: 45px; /* Sesuaikan agar tepat di tengah lingkaran */
        width: 2px;
        background-color: #dee2e6;
        z-index: 0;
        }

        .step-item {
        display: flex;
        align-items: flex-start;
        position: relative;
        z-index: 1;
        }

        /* Lingkaran Angka */
        .step-circle {
        min-width: 50px;
        height: 50px;
        background-color: #0d6efd;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        margin-right: 20px;
        border: 4px solid white; /* Memberi jarak agar garis tidak menempel */
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .step-content {
        padding-top: 10px;
        }

        /* Efek Hover (Opsional) */
        .step-item:hover .step-circle {
        background-color: #0b5ed7;
        transform: scale(1.1);
        transition: all 0.3s ease;
        }


        .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        }


        .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        /* Mobile (default, <768px) */
        .margin-mobile {
        margin-top: 10px;
        }


        /* Medium (md, ≥768px) */
        @media (min-width: 768px) {
        .margin-medium {
        margin-top: 15px;
        }
        }


        /* Optional: hapus margin di lg ke atas */
        @media (min-width: 992px) {
        .margin-large {
        margin: 0;
        }
        }

    </style>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan Cianjur</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Fitur</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Benefit</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Harga</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Lainnya
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>

            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12 col-md-12 col-lg-6 text-center text-md-start margin-mobile margin-medium margin-large">
                    <h1 class="display-4 fw-bold text-dark mb-3">
                       Manajemen Perpustakaan yang Efisien dan Modern
                    </h1>
                    <p class="fs-5 text-secondary mb-4">
                    Perpustakaan Cianjur mempermudah pengelolaan katalog buku, data anggota, dan proses peminjaman. Dikembangkan untuk  perpustakaan umum yang mengutamakan efisiensi khusus daerah
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                        <button class="btn btn-primary btn-lg px-4 fw-bold shadow-sm">Gabung Sekarang</button>
                        <button class="btn btn-outline-primary btn-lg px-4 fw-bold">Tentang Kami</button>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-6 margin-mobile margin-medium margin-large">
                    <img src="<?= base_url('assets/img/book-lover-bro.svg') ?>" alt="Library Management Dashboard">
                </div>

            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="text-center">
                    <h1>Kenapa Perpustakaan Cianjur</h1>
                    <div class="text-secondary fs-5 mt-3">
                    <p>Kami hadir untuk menghubungkan jarak antara pembaca dan ilmu pengetahuan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>  
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>  
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>  
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-6 margin-mobile margin-medium margin-large">
                    <img src="<?= base_url('assets/img/Spreadsheets-rafiki.svg') ?>" alt="Library Management Dashboard">
                </div>
                <div class="col-12 col-md-12 col-lg-6 text-center text-md-start margin-mobile margin-medium margin-large">
                    <h1 class="fw-bold text-dark mb-3">
                       Katalog Multifungsi
                    </h1>
                    <p class="fs-5 text-secondary mb-4">
                        E-Catalog Terpadu menghadirkan pencarian buku instan melalui kategori, penulis, atau nomor ISBN. Temukan koleksi literatur secara akurat, cepat, dan efisien dalam satu sistem platform digital yang komprehensif serta mudah digunakan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12 col-md-12 col-lg-6 text-center text-md-start margin-mobile margin-medium margin-large order-2 order-lg-1">
                    <h1 class="fw-bold text-dark mb-3">
                        Seni Daerah Lokal
                    </h1>
                    <p class="fs-5 text-secondary mb-4">
                        Arsip digital dan buku terkurasi yang menyimpan sejarah, budaya, tradisi, tokoh, dan potensi unggulan daerah Cianjur, sebagai sumber informasi edukatif, pelestarian warisan lokal.
                    </p>
                </div>

                <div class="col-12 col-md-12 col-lg-6 margin-mobile margin-medium margin-large order-1 order-lg-2">
                    <img src="<?= base_url('assets/img/Art-lover-rafiki.svg') ?>" alt="Library Management Dashboard" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-md-12 col-lg-6 margin-mobile margin-medium margin-large">
                    <img src="<?= base_url('assets/img/newmember-rafiki.svg') ?>" alt="Library Management Dashboard" class="img-fluid">
                </div>
                
                <div class="col-12 col-md-12 col-lg-6 text-center text-md-start margin-mobile margin-medium margin-large">
                    <h1 class="fw-bold text-dark mb-3">
                        Kartu Anggota Perpustakaan
                    </h1>
                    <p class="fs-5 text-secondary mb-4">
                        Data keanggotaan dapat dimanfaatkan untuk pengembangan layanan berbasis kebutuhan masyarakat daerah, Integrasi dengan sistem lain memudahkan kolaborasi antar perpustakaan dalam satu wilayah.
                    </p>
                </div>



            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12 col-md-12 col-lg-6 text-center text-md-start margin-mobile margin-medium margin-large">
                    <h1 class="fw-bold text-dark mb-3">
                       Layanan Terpadu Pemerintah
                    </h1>
                    <p class="fs-5 text-secondary mb-4">
                        Perpustakaan daerah menjadi simpul strategis dalam mendukung transparansi dan akses informasi pemerintahan kepada masyarakat. Layanan ini mendukung keterbukaan informasi publik sesuai dengan prinsip good governance.
                    </p>
                </div>

                <div class="col-12 col-md-12 col-lg-6 margin-mobile margin-medium margin-large">
                    <img src="<?= base_url('assets/img/Collab-bro.svg') ?>" alt="Library Management Dashboard">
                </div>

            </div>
        </div>
    </section>


    <div class="container">
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-7">
                <h1 class="text-center fw-bold text-dark mb-3">Mudah Daftar & Digunakan</h1>
                <p class="text-muted small text-center">dengan kemudahan layanan terpadu ini anda cukup untuk membuat kartu layanan anggota cukup dengan ktp atau kartu pelajar</p>
                
                <div class="vertical-steps">
                
                <div class="step-item mb-4">
                    <div class="step-circle">1</div>
                    <div class="step-content">
                    <h5>Registrasi Akun</h5>
                    <p class="text-muted">Pengguna membuat akun melalui perpustakaan cianjur dengan mengisi data dasar seperti nama, email, ktp / kartu pelajar dan nomor handphone yang aktif.</p>
                    </div>
                </div>

                <div class="step-item mb-4">
                    <div class="step-circle">2</div>
                    <div class="step-content">
                    <h5>Aktivasi Kartu Digital</h5>
                    <p class="text-muted">Sistem otomatis menghasilkan kartu keanggotaan digital yang dapat diakses langsung dari akun pengguna.</p>
                    </div>
                </div>

                <div class="step-item mb-4">
                    <div class="step-circle">3</div>
                    <div class="step-content">
                    <h5>Verifikasi Data</h5>
                    <p class="text-muted">Pengguna melakukan verifikasi data diri. Admin perpustakaan meninjau dan menyetujui pendaftaran secara sistematis.</p>
                    </div>
                </div>

                <div class="step-item mb-4">
                    <div class="step-circle">4</div>
                    <div class="step-content">
                    <h5>Status Member Aktif</h5>
                    <p class="text-muted">Setelah diverifikasi, akun pengguna berubah menjadi member aktif dengan hak akses layanan perpustakaan.</p>
                    </div>
                </div>

                </div>
            </div>
            </div>
        </div>
        </section>
    </div>

    


    <div class="container py-5">
        <h2 class="text-center mb-5 fw-bold">Apa Kata Mereka?</h2>

        <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <div class="row px-lg-5">
                        <div class="col-md-4">
                            <div class="card testimonial-card p-4 text-center">
                                <div class="card-body">
                                    <img src="https://i.pravatar.cc/150?u=1" class="profile-img-top mx-auto" alt="User">
                                    <h5 class="fw-bold mb-0">Andi Wijaya</h5>
                                    <p class="text-primary small mb-3">CEO Startup</p>
                                    <p class="card-text text-muted">"Layanannya sangat cepat dan responsif. Saya sangat puas!"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="card testimonial-card p-4 text-center">
                                <div class="card-body">
                                    <img src="https://i.pravatar.cc/150?u=2" class="profile-img-top mx-auto" alt="User">
                                    <h5 class="fw-bold mb-0">Siti Aminah</h5>
                                    <p class="text-primary small mb-3">Freelancer</p>
                                    <p class="card-text text-muted">"Fitur-fiturnya sangat mudah digunakan bahkan untuk pemula."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="card testimonial-card p-4 text-center">
                                <div class="card-body">
                                    <img src="https://i.pravatar.cc/150?u=3" class="profile-img-top mx-auto" alt="User">
                                    <h5 class="fw-bold mb-0">Budi Santoso</h5>
                                    <p class="text-primary small mb-3">Entrepreneur</p>
                                    <p class="card-text text-muted">"Harga sangat terjangkau dengan kualitas premium. Mantap!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row px-lg-5">
                        <div class="col-md-4">
                            <div class="card testimonial-card p-4 text-center">
                                <div class="card-body">
                                    <img src="https://i.pravatar.cc/150?u=4" class="profile-img-top mx-auto" alt="User">
                                    <h5 class="fw-bold mb-0">Dewi Lestari</h5>
                                    <p class="text-primary small mb-3">Marketing</p>
                                    <p class="card-text text-muted">"Desainnya modern dan sangat membantu branding kami."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="card testimonial-card p-4 text-center">
                                <div class="card-body">
                                    <img src="https://i.pravatar.cc/150?u=5" class="profile-img-top mx-auto" alt="User">
                                    <h5 class="fw-bold mb-0">Rizky Pratama</h5>
                                    <p class="text-primary small mb-3">Engineer</p>
                                    <p class="card-text text-muted">"Support team luar biasa. Sangat merekomendasikan layanan ini."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="card testimonial-card p-4 text-center">
                                <div class="card-body">
                                    <img src="https://i.pravatar.cc/150?u=6" class="profile-img-top mx-auto" alt="User">
                                    <h5 class="fw-bold mb-0">Maya Indah</h5>
                                    <p class="text-primary small mb-3">Owner</p>
                                    <p class="card-text text-muted">"Hasilnya sangat memuaskan dan selesai tepat waktu."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <h1>CTA</h1>
    </div>

    <div class="container-fluid">
        <h1>footer</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
</body>
</html>