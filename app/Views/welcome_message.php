<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Halo Dokumen</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('css/index.css') ?>">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="80" tabindex="0">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan Cianjur</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#fitur">Fitur</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#benefit">Benefit</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#registrasi">Registrasi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#review">Review</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#gratis">Gratis</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#pertanyaan">Pertanyaan</a>
                </li>
            </ul>

            </div>
        </div>
    </nav>

    <section id="home">
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

<section id="fitur">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div id="fitur" class="text-center">
                    <h1>Kenapa Perpustakaan Cianjur</h1>
                    <div class="text-secondary fs-5 mt-3">
                    <p>Kami hadir untuk menghubungkan jarak antara pembaca dan ilmu pengetahuan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <div class="icon-wrap mx-auto mb-3">
                            <i class="fa-solid fa-tag fa-2x"></i>
                        </div>
                        <h4 class="fw-bold card-title text-center mt-3 mb-3">Gratis Umum</h4>
                        <p class="card-text text-muted text-center">Perpustakaan memiliki koleksi buku yang sangat banyak dalam berbagai genre serta buku-buku dapat di akses dengan sangat mudah dan gratis</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <div class="icon-wrap mx-auto mb-3">
                            <i class="fa-solid fa-handshake fa-2x"></i>
                        </div>
                        <h4 class="fw-bold card-title text-center mt-3 mb-3">Tersedia Untuk Semua</h4>
                        <p class="card-text text-muted text-center">Perpustakaan kami inklusif yang artinya terbuka untuk semua kalangan masyarakat dewasa, remaja dan anak-anak sehingga terbuka untuk umum serta semuanya</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <div class="icon-wrap mx-auto mb-3">
                            <i class="fa-solid fa-users fa-2x"></i>
                        </div>
                        <h4 class="fw-bold card-title text-center mt-3 mb-3">Komunitas Lokal</h4>
                        <p class="card-text text-muted text-center">Komunitas untuk sharing ilmu dan pengetahuan sehingga anda bisa mempunyai jaringan pertemanan atau koneksi yang sangat luas</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <div class="icon-wrap mx-auto mb-3">
                            <i class="fa-solid fa-mug-hot fa-2x"></i>
                        </div>
                        <h4 class="fw-bold card-title text-center mt-3 mb-3">Tempat Nyaman</h4>
                        <p class="card-text text-muted text-center">Perpustakaan bisa digunakan untuk sharing ilmu dan pengetahuan sehingga anda bisa mempunyai jaringan pertemanan atau koneksi yang sangat luas</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <div class="icon-wrap mx-auto mb-3">
                            <i class="fa-solid fa-location-dot fa-2x"></i>
                        </div>
                        <h4 class="fw-bold card-title text-center mt-3 mb-3">Lokasi Strategis</h4>
                        <p class="card-text text-muted text-center">Kami mempunyai lokasi yang strategi tersedia di 5 kecamatan berbeda untuk mengakses ilmu pengetahuan secara mudah dan dapat diakses oleh masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <div class="icon-wrap mx-auto mb-3">
                            <i class="fa-solid fa-box-archive fa-2x"></i>
                        </div>
                        <h4 class="fw-bold card-title text-center mt-3 mb-3">Koleksi Buku Langka</h4>
                        <p class="card-text text-muted text-center">Perpustakaan memiliki simpanan buku langka yang menarik dibaca karena buku-buku tersebut hanya tersedia untuk daerah saja dan tidak diperjual belikan untuk umum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="benefit">
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
                
                <div class="col-12 col-md-12 col-lg-6 text-center text-md-start margin-mobile margin-medium margin-large order-2 order-lg-1">
                    <h1 class="fw-bold text-dark mb-3">
                       Layanan Terpadu Pemerintah
                    </h1>
                    <p class="fs-5 text-secondary mb-4">
                        Perpustakaan daerah menjadi simpul strategis dalam mendukung transparansi dan akses informasi pemerintahan kepada masyarakat. Layanan ini mendukung keterbukaan informasi publik sesuai dengan prinsip good governance.
                    </p>
                </div>

                <div class="col-12 col-md-12 col-lg-6 margin-mobile margin-medium margin-large order-1 order-lg-2">
                    <img src="<?= base_url('assets/img/Collab-bro.svg') ?>" alt="Library Management Dashboard">
                </div>

            </div>
        </div>
    </section>


    <div class="container">
    <section class="py-5" id="registrasi">
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

    


    <section id="review">
        <div class="container py-5">
            <h2 class="text-center mb-5 fw-bold">Apa Kata Anggota?</h2>
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
    </section>


    <section class="py-5 bg-light" id="gratis">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Layanan Keanggotaan</h2>
            <p class="text-muted">Pilih paket akses yang sesuai dengan kebutuhan literasi Anda</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <div class="card h-100 shadow border-primary" style="transform: scale(1.05);">
                    <div class="card-body p-4">
                        <span class="badge bg-primary float-end text-uppercase">Populer</span>
                        <h5 class="text-muted text-uppercase mb-3">Anggota</h5>
                        <h2 class="fw-bold mb-4">GRATIS <small class="text-muted fs-6">/tahun</small></h2>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Baca buku di tempat</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Akses Wi-Fi kecepatan tinggi</li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> <strong>Pinjam hingga 3 buku</strong></li>
                            <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Akses 600+ buku</li>
                            <li class="mb-3"><i class="bi bi-x-circle me-2"></i> Tersedia komputer untuk digunakan</li>
                            <li class="mb-3"><i class="bi bi-x-circle me-2"></i> Ruangan nyaman</li>
                            <li class="mb-3"><i class="bi bi-x-circle me-2"></i> Layanan cetak print</li>
                        </ul>
                        <button class="btn btn-primary w-100 shadow">Daftar Anggota</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

   


    <section id="pertanyaan">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-md-6">
                
            <section id="faq" class="py-5">
                    <div class="container">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold">Pertanyaan yang Sering Diajukan</h2>
                            <p class="text-muted">
                                Informasi seputar peminjaman buku di Perpustakaan Cianjur
                            </p>
                        </div>

                        <div class="accordion" id="faqAccordion">

                            <!-- FAQ 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapseOne" 
                                        aria-expanded="true" 
                                        aria-controls="collapseOne">
                                        Bagaimana cara meminjam buku di Perpustakaan Cianjur?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" 
                                    aria-labelledby="headingOne" 
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Pemustaka yang telah terdaftar sebagai anggota dapat meminjam buku 
                                        menggunakan kartu anggota digital atau fisik melalui layanan 
                                        peminjaman di perpustakaan maupun aplikasi perpustakaan.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapseTwo" 
                                        aria-expanded="false" 
                                        aria-controls="collapseTwo">
                                        Berapa lama durasi peminjaman buku?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" 
                                    aria-labelledby="headingTwo" 
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Durasi peminjaman buku adalah <strong>7 hari</strong> dan dapat 
                                        diperpanjang sesuai ketentuan, selama buku tidak sedang dipesan 
                                        oleh pemustaka lain.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapseThree" 
                                        aria-expanded="false" 
                                        aria-controls="collapseThree">
                                        Berapa jumlah maksimal buku yang dapat dipinjam?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" 
                                    aria-labelledby="headingThree" 
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Setiap anggota Perpustakaan Cianjur dapat meminjam maksimal 
                                        <strong>3 buku</strong> dalam satu periode peminjaman.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapseFour" 
                                        aria-expanded="false" 
                                        aria-controls="collapseFour">
                                        Apakah ada denda jika terlambat mengembalikan buku?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" 
                                    aria-labelledby="headingFour" 
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Ya, keterlambatan pengembalian buku akan dikenakan denda sesuai 
                                        peraturan yang berlaku di Perpustakaan Cianjur.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </div>
            
        </div>
    </section>



    
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <h1 class="text-center fw-bold text-light ">Ayo Menjadi Anggota</h1>
                <p class="mb-3 mt-3 text-light">
                Daftarkan diri Anda dan miliki Kartu Anggota Perpustakaan  untuk
                mengakses ribuan koleksi buku, arsip daerah, serta berbagai layanan
                perpustakaan secara mudah, cepat, terintegrasi, dan gratis!.
                </p>
                <a href="#daftar" class="btn btn-dark btn-md px-4">
                Gabung Sekarang
                </a>
            </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-light pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">Perpustakaan Cianjur</h5>
                    <p>Meningkatkan literasi masyarakat Cianjur melalui akses buku digital yang mudah, cepat, dan terpercaya bagi seluruh lapisan masyarakat.</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">Layanan</h5>
                    <p><a href="#" class="text-light text-decoration-none">Pinjam Buku</a></p>
                    <p><a href="#" class="text-light text-decoration-none">E-Journal</a></p>
                    <p><a href="#" class="text-light text-decoration-none">Donasi Buku</a></p>
                    <p><a href="#" class="text-light text-decoration-none">Keanggotaan</a></p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">Bantuan</h5>
                    <p><a href="#" class="text-light text-decoration-none">Akun Saya</a></p>
                    <p><a href="#" class="text-light text-decoration-none">Kebijakan Privasi</a></p>
                    <p><a href="#" class="text-light text-decoration-none">Syarat & Ketentuan</a></p>
                    <p><a href="#" class="text-light text-decoration-none">Kontak Kami</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">Hubungi Kami</h5>
                    <p><i class="fas fa-home me-2"></i> Jl. Siti Jenab No. 31, Cianjur</p>
                    <p><i class="fas fa-envelope me-2"></i> info@perpuscianjur.id</p>
                    <p><i class="fas fa-phone me-2"></i> +62 263 123456</p>
                </div>

            </div>

            <hr class="mb-4">

            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <p>© 2026 Copyright: 
                        <a href="#" class="text-primary fw-bold text-decoration-none">Perpustakaan Digital Cianjur</a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4 text-center text-md-end">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-light btn-sm" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-light btn-sm" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-light btn-sm" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
</body>
</html>