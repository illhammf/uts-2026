@php
    $nama = $profile->nama ?? 'Ilham Firmansyah';
    $profesi = $profile->judul_profesi ?? 'Developer';
    $bio = $profile->bio_singkat ?? 'Mahasiswa Teknik Informatika yang fokus pada pengembangan website berbasis Laravel.';
    $tentang = $profile->deskripsi_tentang ?? 'Saya memiliki ketertarikan dalam pengembangan aplikasi web.';

    $whatsappNumber = preg_replace('/[^0-9]/', '', $profile->whatsapp ?? '');
    $github = $profile->github ?? '#';
    $instagram = $profile->instagram ?? '#';

    $projectImages = [
        'front/images/portfolio-img1.jpg',
        'front/images/portfolio-img2.jpg',
        'front/images/portfolio-img3.jpg',
        'front/images/portfolio-img4.jpg',
    ];

    $techStacks = $projects->pluck('tech_stack')
        ->filter()
        ->flatMap(fn ($stack) => collect(explode(',', $stack))->map(fn ($item) => trim($item)))
        ->unique()
        ->take(4)
        ->values();
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Ilham Firmansyah, Laravel Developer, Web Developer, Portofolio, Tukang Print Dadakan">
    <meta name="description" content="Website portofolio Ilham Firmansyah sebagai mahasiswa Teknik Informatika dan developer web berbasis Laravel.">

    <title>Portofolio {{ $nama }}</title>

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/templatemo-style.css') }}">

    <style>
    .empty-project {
        padding: 60px 20px;
        background: #f8f8f8;
        border-radius: 10px;
        margin-top: 20px;
    }

    .empty-project h3 {
        color: #eb5424;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .empty-project p {
        color: #777;
        font-size: 16px;
    }
    </style>

    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600,700" rel="stylesheet" type="text/css">
</head>

<body data-spy="scroll" data-target="#rock-navigation" x-data="{ darkMode: false }" :class="{ 'dark-mode': darkMode }">

    <!-- START NAVIGATION -->
    <div class="navbar navbar-default bs-dos-nav navbar-fixed-top sticky-navigation" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="#home" class="navbar-brand smoothScroll">{{ $nama }}</a>
            </div>

            <nav class="collapse navbar-collapse" id="rock-navigation">
                <ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#work" class="smoothScroll">Keahlian</a></li>
                    <li><a href="#portfolio" class="smoothScroll">Project</a></li>
                    <li><a href="#resume" class="smoothScroll">Profil</a></li>
                    <li><a href="#about" class="smoothScroll">Tentang</a></li>
                    <li><a href="#contact" class="smoothScroll">Kontak</a></li>
                    <li>
                        <button
                            type="button"
                            @click="darkMode = !darkMode"
                            class="dark-toggle-btn">
                            <span x-show="!darkMode">🌙</span>
                            <span x-show="darkMode">☀️</span>
                        </button>
                    </li>
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
                <h1 class="tm-home-title"><strong><br>{{ $nama }}</strong></h1>
                <h1 class="tm-home-subtitle">{{ $profesi }}</h1>
                <p>{{ $bio }}</p>
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
                        <h1 class="tm-portfolio-title">Showcase <strong>Project</strong></h1>
                    </div>

                    <div class="iso-section">
                        <ul class="filter-wrapper clearfix">
                            <li><a href="#" class="opc-main-bg selected" data-filter="*">Semua</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".web">Web</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".ekonomi">Ekonomi</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".kesehatan">Kesehatan</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".sosial">Sosial</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".pendidikan">Pendidikan</a></li>
                        </ul>

                        <div class="iso-box-section">
                            <div class="iso-box-wrapper col4-iso-box">

                                @forelse ($projects as $index => $project)
                                    <div class="iso-box {{ $project->kategori ?? 'web' }} col-md-3 col-sm-3 col-xs-12">
                                        <div class="portfolio-thumb">
                                            <img
                                                src="{{ $project->gambar ? asset('storage/' . $project->gambar) : asset($projectImages[$index % count($projectImages)]) }}"
                                                class="fluid-img"
                                                alt="{{ $project->judul }}">
                                            <div class="portfolio-overlay">
                                                <h3 class="portfolio-item-title">{{ $project->judul }}</h3>
                                                <p>{{ $project->deskripsi_singkat }}</p>
                                                <p>
                                                    <a href="{{ route('project.detail', $project->slug) }}" class="btn btn-default">
                                                        Detail Project
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-md-12 text-center empty-project">
                                        <h3>Project Belum Tersedia</h3>
                                        <p>
                                            Belum ada project yang ditampilkan pada kategori ini.
                                        </p>
                                    </div>
                                @endforelse
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

                    @if ($profile?->foto)
                        <div style="margin-bottom: 25px;">
                            <img
                                src="{{ asset('storage/' . $profile->foto) }}"
                                alt="{{ $nama }}"
                                class="img-responsive"
                                style="width: 170px; height: 170px; object-fit: cover; border-radius: 50%; border: 5px solid #eb5424;">
                        </div>
                    @endif

                    <p>
                        <span class="tm-info-label" style="min-width: 140px; display: inline-block;">Nama</span>
                        {{ $profile->nama ?? '-' }}
                    </p>

                    <p>
                        <span class="tm-info-label" style="min-width: 140px; display: inline-block;">NIM</span>
                        {{ $profile->nim ?? '-' }}
                    </p>

                    <p>
                        <span class="tm-info-label" style="min-width: 140px; display: inline-block;">Kampus</span>
                        {{ $profile->kampus ?? '-' }}
                    </p>

                    <p>
                        <span class="tm-info-label" style="min-width: 140px; display: inline-block;">Program Studi</span>
                        {{ $profile->prodi ?? '-' }}
                    </p>

                    <p>
                        <span class="tm-info-label" style="min-width: 140px; display: inline-block;">Semester</span>
                        {{ $profile->semester ?? '-' }}
                    </p>

                    <p>
                        <span class="tm-info-label" style="min-width: 140px; display: inline-block;">Email</span>
                        {{ $profile->email ?? '-' }}
                    </p>

                    <p>
                        <span class="tm-info-label" style="min-width: 140px; display: inline-block;">GitHub</span>

                        <a href="{{ $github }}" class="tm-red-text" target="_blank">
                            {{ $github }}
                        </a>
                    </p>
                </div>

                <div class="col-md-6 col-sm-6">
                    <h2 class="title"><strong>Tech</strong> Stack</h2>
                    <p>
                        Beberapa teknologi yang sedang saya pelajari dan gunakan dalam pengembangan project
                        Pemrograman Web.
                    </p>

                    @forelse ($skills as $skill)

                        <h4 class="tm-progress-label">
                            {{ strtoupper($skill->nama_skill) }}
                            <small class="progress-percent-small">
                                {{ $skill->persentase }}%
                            </small>
                        </h4>

                        <div class="progress tm-progress">
                            <div class="progress-bar progress-bar-danger"
                                role="progressbar"
                                style="width: {{ $skill->persentase }}%;">
                            </div>
                        </div>

                    @empty
                        <p>Belum ada skill yang ditambahkan.</p>
                    @endforelse
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
                        <h1 class="tm-red-text">{{ $profesi }}</h1>
                    </div>
                    <p>
                        {{ $tentang }}
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
                        <a href="{{ $github }}" target="_blank">
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
                        <a href="{{ $instagram }}" target="_blank">
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
                        <a href="https://wa.me/{{ $whatsappNumber}}" target="_blank">
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
                                    <p>{{ $profile->email ?? '-' }}</p>
                                </div>
                            </div>

                            <div class="contact-detail">
                                <i class="fa fa-whatsapp"></i>
                                <div>
                                    <strong>WhatsApp</strong>
                                    <p>{{ $profile->whatsapp ?? '-' }}</p>
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

                            <form action="{{ route('kontak.store') }}" method="POST"> <!-- Untuk menyimpan pesan kontak ke database -->
                                @csrf
                                
                                @if (session('success')) <!-- Menampilkan pesan sukses setelah pengiriman berhasil -->
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif


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
                        Copyright &copy; 2026 {{ $nama }} - All rights reserved. <br>
                        design by
                        <a href="https://github.com/illhammf" target="_blank">
                            illhammf
                        </a>
                        <hr>
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

    <script>
    $(document).ready(function () {
        $('.filter-wrapper a').on('click', function () {
            const filterValue = $(this).attr('data-filter');

            setTimeout(function () {
                $('#empty-category').remove();

                let totalItem = filterValue === '*'
                    ? $('.iso-box').length
                    : $('.iso-box' + filterValue).length;

                if (totalItem === 0) {
                    $('.iso-box-wrapper').append(`
                        <div id="empty-category" class="col-md-12 text-center empty-project">
                            <h3>Project Belum Tersedia</h3>
                            <p>Belum ada project pada kategori ini.</p>
                        </div>
                    `);
                }
            }, 300);
        });
    });
    </script>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>