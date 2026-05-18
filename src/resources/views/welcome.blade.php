<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Ilham Firmansyah, Laravel Developer, Web Developer, Portofolio, Tukang Print Dadakan">
    <meta name="description" content="Website portofolio Ilham Firmansyah sebagai mahasiswa Teknik Informatika dan developer web berbasis Laravel.">

    <title>Portofolio Ilham Firmansyah</title>

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/templatemo-style.css') }}">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600,700" rel="stylesheet" type="text/css">
</head>

<body data-spy="scroll" data-target="#rock-navigation">

    <!-- START NAVIGATION -->
    <div class="navbar navbar-default bs-dos-nav navbar-fixed-top sticky-navigation" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="#home" class="navbar-brand smoothScroll">Ilham Firmansyah</a>
            </div>

            <nav class="collapse navbar-collapse" id="rock-navigation">
                <ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#work" class="smoothScroll">Keahlian</a></li>
                    <li><a href="#portfolio" class="smoothScroll">Project</a></li>
                    <li><a href="#resume" class="smoothScroll">Profil</a></li>
                    <li><a href="#about" class="smoothScroll">Tentang</a></li>
                    <li><a href="#contact" class="smoothScroll">Kontak</a></li>
                </ul>
            </nav>

        </div>
    </div>
    <!-- END NAVIGATION -->


    <!-- START HOME -->
    <section id="home" class="templatemo-home">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-1"></div>

                <div class="col-md-8 col-sm-10">
                    <h1 class="tm-home-title"><strong>Ilham Firmansyah</strong></h1>
                    <h2 class="tm-home-subtitle">Mahasiswa Teknik Informatika <br> & Web Developer</h2>
                    <p>
                        Saya adalah mahasiswa semester 4 Teknik Informatika Universitas Esa Unggul yang sedang mengembangkan
                        kemampuan di bidang <strong>Web Development</strong>, khususnya menggunakan
                        <strong>Laravel</strong>, <strong>PHP</strong>, <strong>Blade</strong>,
                        <strong>Docker</strong>, dan <strong>MariaDB</strong>.
                    </p>
                    <a href="#portfolio" class="btn btn-default smoothScroll tm-view-more-btn">Lihat Project</a>
                </div>

                <div class="col-md-2 col-sm-1"></div>
            </div>
        </div>
    </section>
    <!-- END HOME -->


    <!-- START WORK -->
    <section id="work" class="tm-padding-top-bottom-100">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-1 col-md-11">
                    <h2 class="title">Bidang <strong>Keahlian</strong></h2>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="work-wrapper">
                        <i class="fa fa-code"></i>
                        <h3 class="text-uppercase tm-work-h3">Web Development</h3>
                        <hr>
                        <p>
                            Membangun website berbasis Laravel, PHP, Blade Template, HTML, CSS,
                            dan JavaScript dengan struktur yang rapi dan mudah dikembangkan.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="work-wrapper">
                        <i class="fa fa-database"></i>
                        <h3 class="text-uppercase tm-work-h3">Database & CRUD</h3>
                        <hr>
                        <p>
                            Merancang database, membuat relasi tabel, serta menerapkan fitur CRUD
                            untuk mengelola data secara dinamis pada aplikasi web.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="work-wrapper">
                        <i class="fa fa-server"></i>
                        <h3 class="text-uppercase tm-work-h3">Docker & GitHub</h3>
                        <hr>
                        <p>
                            Menggunakan Docker untuk environment development dan GitHub sebagai
                            version control dalam proses pengembangan project.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END WORK -->


    <!-- START PORTFOLIO -->
    <section id="portfolio" class="tm-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow bounce">

                    <div class="title">
                        <h2 class="tm-portfolio-title">Showcase <strong>Project</strong></h2>
                    </div>

                    <div class="iso-section">
                        <ul class="filter-wrapper clearfix">
                            <li><a href="#" class="opc-main-bg selected" data-filter="*">Semua</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".web">Web</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".laravel">Laravel</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".academic">Akademik</a></li>
                        </ul>

                        <div class="iso-box-section">
                            <div class="iso-box-wrapper col4-iso-box">

                                <div class="iso-box web laravel academic col-md-3 col-sm-3 col-xs-12">
                                    <div class="portfolio-thumb">
                                        <img src="{{ asset('front/images/portfolio-img1.jpg') }}" class="fluid-img" alt="Tukang Print Dadakan">
                                        <div class="portfolio-overlay">
                                            <h3 class="portfolio-item-title">Tukang Print Dadakan</h3>
                                            <p>Sistem booking layanan print mahasiswa berbasis Laravel.</p>
                                            <p>
                                                <a href="{{ url('/project/tukang-print-dadakan') }}" class="btn btn-default">
                                                    Detail Project
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box web laravel col-md-3 col-sm-3 col-xs-12">
                                    <div class="portfolio-thumb">
                                        <img src="{{ asset('front/images/portfolio-img2.jpg') }}" class="fluid-img" alt="Portfolio Website">
                                        <div class="portfolio-overlay">
                                            <h3 class="portfolio-item-title">Website Portofolio</h3>
                                            <p>Website personal untuk menampilkan profil, skill, project, dan kontak.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box academic col-md-3 col-sm-3 col-xs-12">
                                    <div class="portfolio-thumb">
                                        <img src="{{ asset('front/images/portfolio-img3.jpg') }}" class="fluid-img" alt="Laporan Project">
                                        <div class="portfolio-overlay">
                                            <h3 class="portfolio-item-title">Laporan Project Akhir</h3>
                                            <p>Dokumentasi awal project berisi BAB I sampai BAB V dan diagram sistem.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box web col-md-3 col-sm-3 col-xs-12">
                                    <div class="portfolio-thumb">
                                        <img src="{{ asset('front/images/portfolio-img4.jpg') }}" class="fluid-img" alt="Contact Form">
                                        <div class="portfolio-overlay">
                                            <h3 class="portfolio-item-title">Form Kontak Dinamis</h3>
                                            <p>Form kontak yang dirancang agar dapat terhubung ke database.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END PORTFOLIO -->


    <!-- START RESUME -->
    <section id="resume" class="tm-padding-top-bottom-100">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <h2 class="title">Profil <strong>Saya</strong></h2>
                    <p><span class="tm-info-label">Nama</span> Ilham Firmansyah</p>
                    <p><span class="tm-info-label">NIM</span> 20240801102</p>
                    <p><span class="tm-info-label">Kampus</span> Universitas Esa Unggul</p>
                    <p><span class="tm-info-label">Program Studi</span> Teknik Informatika</p>
                    <p><span class="tm-info-label">Semester</span> 4</p>
                    <p><span class="tm-info-label">Email</span> ilhamfrafli@gmail.com</p>
                    <p><span class="tm-info-label">GitHub</span>
                        <a href="https://github.com/illhammf" class="tm-red-text" target="_blank">github.com/illhammf</a>
                    </p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <h2 class="title"><strong>Tech</strong> Stack</h2>
                    <p>
                        Beberapa teknologi yang sedang saya pelajari dan gunakan dalam pengembangan project
                        Pemrograman Web.
                    </p>

                    <h4 class="tm-progress-label">Laravel & PHP <small class="progress-percent-small">85%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 85%;"></div>
                    </div>

                    <h4 class="tm-progress-label">HTML, CSS, JavaScript <small class="progress-percent-small">80%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 80%;"></div>
                    </div>

                    <h4 class="tm-progress-label">Docker & WSL <small class="progress-percent-small">75%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 75%;"></div>
                    </div>

                    <h4 class="tm-progress-label">MariaDB & CRUD <small class="progress-percent-small">80%</small></h4>
                    <div class="progress tm-progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 80%;"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END RESUME -->


    <!-- START ABOUT -->
    <section id="about" class="tm-about">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-7">
                    <div class="title">
                        <h2>Tentang <strong>Saya</strong></h2>
                        <h1 class="tm-red-text">Web <strong>Developer</strong></h1>
                    </div>
                    <p>
                        Saya memiliki ketertarikan dalam pengembangan aplikasi web, khususnya aplikasi
                        yang dapat membantu menyelesaikan masalah nyata di sekitar saya.
                    </p>
                    <p>
                        Salah satu project yang sedang saya kembangkan adalah
                        <strong>Tukang Print Dadakan</strong>, yaitu sistem booking layanan print mahasiswa
                        berbasis web yang menyediakan fitur pemesanan online, upload file, pembayaran digital,
                        dashboard admin, dan integrasi WhatsApp.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->


    <!-- START SOCIAL -->
    <section id="social" class="tm-social">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.3s">
                    <div class="media github">
                        <a href="https://github.com/illhammf" target="_blank">
                            <div class="media-object pull-left">
                                <i class="fa fa-github"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading tm-social-title">Lihat source code di</h4>
                                <h3>GitHub</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.6s">
                    <div class="media instagram">
                        <a href="https://www.instagram.com/illhammf" target="_blank">
                            <div class="media-object pull-left">
                                <i class="fa fa-instagram"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading tm-social-title">Terhubung melalui</h4>
                                <h3>Instagram</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.9s">
                    <div class="media whatsapp">
                        <a href="https://wa.me/62895336900466" target="_blank">
                            <div class="media-object pull-left">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading tm-social-title">Hubungi saya di</h4>
                                <h3>WhatsApp</h3>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END SOCIAL -->


    <!-- START CONTACT -->
    <section id="contact" class="tm-contact">
        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">
                    <br>
                    <h2 class="title">Hubungi <strong>Saya</strong></h2>
                    <hr>
                    <p class="contact-subtitle">
                        Punya pertanyaan atau ingin bekerja sama?
                        Silakan kirim pesan melalui form di bawah ini.
                    </p>
                </div>

                <div class="col-md-12">
                    <div class="contact-card">

                        <!-- LEFT INFO -->
                        <div class="contact-info">

                            <div class="contact-icon">
                                <i class="fa fa-paper-plane"></i>
                            </div>

                            <h3>Saya Siap <span>Mendengar</span></h3>

                            <p>
                                Jangan ragu untuk menghubungi saya.
                                Saya akan membalas pesan Anda secepat mungkin.
                            </p>

                            <div class="contact-detail">
                                <i class="fa fa-envelope"></i>
                                <div>
                                    <strong>Email</strong>
                                    <p>ilhamfrafli@gmail.com</p>
                                </div>
                            </div>

                            <div class="contact-detail">
                                <i class="fa fa-whatsapp"></i>
                                <div>
                                    <strong>WhatsApp</strong>
                                    <p>0895-3369-00466</p>
                                </div>
                            </div>

                            <div class="contact-detail">
                                <i class="fa fa-map-marker"></i>
                                <div>
                                    <strong>Lokasi</strong>
                                    <p>Tangerang, Indonesia</p>
                                </div>
                            </div>

                        </div>

                        <!-- RIGHT FORM -->
                        <div class="contact-form-area">

                            <form action="{{ url('/kontak') }}" method="post">
                                @csrf

                                <div class="row">

                                    <div class="col-md-6">
                                        <input name="nama" class="form-control" type="text" placeholder="Nama Anda" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input name="email" class="form-control" type="email" placeholder="Email Anda" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input name="subjek" class="form-control" type="text" placeholder="Subjek Pesan" required>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea name="pesan" class="form-control" placeholder="Tulis pesan Anda di sini..." rows="6" required></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="contact-btn">
                                            <i class="fa fa-paper-plane"></i>
                                            Kirim Pesan
                                        </button>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>
                </div>

                <!-- COPYRIGHT -->
                <div class="col-md-12 text-center">
                    <div class="copyright-area">
                        Copyright &copy; 2026 Ilham Firmansyah
                        · design:
                        <a href="https://github.com/illhammf" target="_blank">
                            illhammf
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END CONTACT -->

    <script src="{{ asset('front/js/jquery.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('front/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('front/js/isotope.js') }}"></script>
    <script src="{{ asset('front/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>

</body>
</html>