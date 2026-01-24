<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Halo Dokumen</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <style>

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
                
                <div class="col-12 col-md-12 col-lg-6 text-center text-md-start margin-mobile margin-medium margin-large order-2 order-lg-1">
                    <h1 class="display-4 fw-bold text-dark mb-3">
                        Manajemen Perpustakaan yang Efisien dan Modern
                    </h1>
                    <p class="fs-5 text-secondary mb-4">
                        Perpustakaan Cianjur mempermudah pengelolaan katalog buku, data anggota, dan proses peminjaman. Dikembangkan untuk perpustakaan umum yang mengutamakan efisiensi khusus daerah.
                    </p>
                </div>

                <div class="col-12 col-md-12 col-lg-6 margin-mobile margin-medium margin-large order-1 order-lg-2">
                    <img src="<?= base_url('assets/img/book-lover-bro.svg') ?>" alt="Library Management Dashboard" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

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
                </div>

                <div class="col-12 col-md-12 col-lg-6 margin-mobile margin-medium margin-large">
                    <img src="<?= base_url('assets/img/book-lover-bro.svg') ?>" alt="Library Management Dashboard">
                </div>

            </div>
        </div>
    </section>


    <div class="container">
        <h1>Cara Kerja</h1>
    </div>

    <div class="container">
        <h1>testimoni</h1>
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