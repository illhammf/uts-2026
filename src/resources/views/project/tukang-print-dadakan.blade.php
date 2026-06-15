<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project - Tukang Print Dadakan</title>

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600,700" rel="stylesheet">

    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background: #f6f8fc;
            color: #334155;
        }

        .hero {
            background:
                linear-gradient(135deg, rgba(17,24,39,.96), rgba(235,84,36,.9)),
                url('{{ asset('front/images/portfolio-img1.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 110px 0 90px;
            position: relative;
            overflow: hidden;
        }

        .hero h1 {
            font-size: 54px;
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.9;
            max-width: 820px;
        }

        .badge-custom {
            display: inline-block;
            background: rgba(255,255,255,.16);
            border: 1px solid rgba(255,255,255,.25);
            color: #fff;
            padding: 9px 16px;
            border-radius: 30px;
            margin: 5px 5px 15px 0;
            font-size: 13px;
            font-weight: 700;
        }

        .btn-back {
            display: inline-block;
            margin-top: 25px;
            background: #fff;
            color: #eb5424;
            padding: 13px 28px;
            border-radius: 12px;
            font-weight: 800;
            text-decoration: none;
            transition: .25s;
        }

        .btn-back:hover {
            background: #111827;
            color: #fff;
            text-decoration: none;
            transform: translateY(-2px);
        }

        .section {
            padding: 70px 0;
        }

        .card-box {
            background: #fff;
            border-radius: 22px;
            padding: 36px;
            margin-bottom: 30px;
            box-shadow: 0 14px 35px rgba(15, 23, 42, .08);
            border: 1px solid #eef2f7;
        }

        .card-box h3 {
            color: #111827;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .card-box h3 span {
            color: #eb5424;
        }

        .card-box p,
        .card-box li {
            line-height: 1.85;
            font-size: 15.5px;
        }

        .status-box {
            background: linear-gradient(135deg, #eb5424, #ff7b29);
            color: white;
            border-radius: 22px;
            padding: 36px;
            box-shadow: 0 18px 40px rgba(235,84,36,.25);
        }

        .status-box h3 {
            color: white;
            font-weight: 800;
        }

        .progress {
            height: 18px;
            border-radius: 50px;
            background: rgba(255,255,255,.25);
            margin-top: 18px;
            overflow: hidden;
        }

        .progress-bar {
            background: #fff;
            color: #eb5424;
            font-weight: 800;
            line-height: 18px;
        }

        .feature-card {
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            min-height: 240px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, .07);
            margin-bottom: 25px;
            border-top: 5px solid #eb5424;
            transition: .25s;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 45px rgba(15,23,42,.12);
        }

        .feature-card i {
            font-size: 38px;
            color: #eb5424;
            margin-bottom: 16px;
        }

        .feature-card h4 {
            font-weight: 800;
            color: #111827;
        }

        .tech-stack span {
            display: inline-block;
            background: #111827;
            color: #fff;
            padding: 10px 16px;
            border-radius: 30px;
            margin: 5px;
            font-size: 13px;
            font-weight: 700;
        }

        .diagram-preview {
            background: #fff7ed;
            border: 1px dashed #eb5424;
            border-radius: 18px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .diagram-preview h4 {
            color: #eb5424;
            font-weight: 800;
        }

        .diagram-img {
            width: 100%;
            border-radius: 14px;
            border: 1px solid #fed7aa;
            margin-top: 15px;
        }

        .timeline {
            border-left: 4px solid #eb5424;
            padding-left: 28px;
        }

        .timeline-item {
            margin-bottom: 30px;
            position: relative;
            background: #f8fafc;
            padding: 22px;
            border-radius: 16px;
            border: 1px solid #e5e7eb;
        }

        .timeline-item:before {
            content: "";
            width: 16px;
            height: 16px;
            background: #eb5424;
            border-radius: 50%;
            position: absolute;
            left: -38px;
            top: 26px;
        }

        .timeline-item h4 {
            font-weight: 800;
            color: #111827;
        }

        .footer-project {
            text-align: center;
            padding: 40px 0;
            background: #111827;
            color: #cbd5e1;
        }

        .footer-project a {
            color: #ff7b29;
            font-weight: 800;
        }
    </style>
</head>

<body>

<section class="hero">
    <div class="container">
        <span class="badge-custom">Project Akhir Pemrograman Web</span>
        <span class="badge-custom">Laravel</span>
        <span class="badge-custom">Filament</span>
        <span class="badge-custom">Docker</span>
        <span class="badge-custom">MariaDB</span>

        <h1>Tukang Print Dadakan</h1>

        <p>
            Sistem booking layanan print mahasiswa berbasis web yang dirancang untuk membantu proses pemesanan
            print dokumen, print gambar, fotokopi, jilid, laminating, bantuan formatting tugas, dan belajar bareng
            agar lebih terstruktur, praktis, dan mudah dikelola.
        </p>

        <a href="{{ url('/') }}" class="btn-back">
            <i class="fa fa-arrow-left"></i> Kembali ke Portofolio
        </a>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="card-box">
                    <h3><span>01.</span> Deskripsi Project</h3>
                    <p>
                        Tukang Print Dadakan merupakan aplikasi web yang dikembangkan untuk mendigitalisasi layanan print
                        mahasiswa. Sistem ini membantu pelanggan melakukan booking layanan secara online, mengirim file,
                        memilih layanan tambahan, menentukan metode pembayaran, serta melakukan komunikasi lanjutan melalui WhatsApp.
                    </p>
                    <p>
                        Ide project ini berasal dari kebutuhan nyata mahasiswa yang sering membutuhkan print tugas, modul,
                        laporan, proposal, maupun gambar, tetapi membutuhkan sistem yang lebih praktis dibanding pemesanan manual.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="status-box">
                    <h3>Status Progress</h3>
                    <p>Project berada pada tahap pengembangan awal, perancangan sistem, dashboard admin, dan dokumentasi laporan.</p>
                    <strong>Progress: 75%</strong>
                    <div class="progress">
                        <div class="progress-bar" style="width:75%;">75%</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>02.</span> Analisis Masalah</h3>
            <ul>
                <li>Pemesanan layanan masih banyak dilakukan manual melalui WhatsApp.</li>
                <li>Data pesanan belum tersimpan rapi di database.</li>
                <li>Admin perlu dashboard untuk mengelola project, progress, pesan, dan dokumen.</li>
                <li>Belum tersedia halaman detail project yang menampilkan laporan, diagram, dan progress secara dinamis.</li>
            </ul>
        </div>

        <div class="card-box">
            <h3><span>03.</span> Fitur Layanan</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fa fa-print"></i>
                        <h4>Print Dokumen & Gambar</h4>
                        <p>Layanan print hitam putih maupun warna untuk tugas, modul, laporan, dan gambar.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fa fa-files-o"></i>
                        <h4>Fotokopi</h4>
                        <p>Layanan penggandaan dokumen untuk kebutuhan akademik dan administrasi mahasiswa.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fa fa-book"></i>
                        <h4>Jilid & Laminating</h4>
                        <p>Layanan finishing dokumen seperti laporan, proposal, sertifikat, dan kartu.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fa fa-file-text"></i>
                        <h4>Formatting Tugas</h4>
                        <p>Bantuan merapikan margin, cover, daftar isi, penomoran halaman, dan format laporan.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fa fa-users"></i>
                        <h4>Belajar Bareng</h4>
                        <p>Diskusi dan belajar santai untuk Word, PowerPoint, coding dasar, dan tugas kuliah.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fa fa-whatsapp"></i>
                        <h4>Integrasi WhatsApp</h4>
                        <p>Pengguna dapat diarahkan ke WhatsApp admin untuk konfirmasi pesanan dan jadwal pengambilan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>04.</span> Arsitektur dan Tech Stack</h3>
            <p>
                Project dikembangkan menggunakan Laravel dengan konsep MVC. Database menggunakan MariaDB,
                tampilan menggunakan Blade Template, dan dashboard admin menggunakan Filament.
            </p>

            <div class="tech-stack">
                <span>Laravel</span>
                <span>PHP</span>
                <span>Blade</span>
                <span>Filament</span>
                <span>Docker</span>
                <span>MariaDB</span>
                <span>GitHub</span>
                <span>WhatsApp Integration</span>
            </div>
        </div>

        <div class="card-box">
            <h3><span>05.</span> Rencana Perancangan Sistem</h3>
            <p>
                Perancangan sistem dibuat untuk menggambarkan struktur database, alur kerja, proses pemesanan,
                serta hubungan antar komponen pada aplikasi Tukang Print Dadakan.
            </p>

            <div class="row">
                <div class="col-md-6">
                    <div class="diagram-preview">
                        <h4>Entity Relationship Diagram</h4>
                        <p>Menjelaskan relasi antara pengguna, layanan, pesanan, detail pesanan, dan pembayaran.</p>
                        <img src="{{ asset('front/diagram/erd.png') }}" alt="ERD Tukang Print Dadakan" class="img-responsive diagram-img">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="diagram-preview">
                        <h4>Flowchart Sistem</h4>
                        <p>Menjelaskan proses login, pemesanan, pembayaran, validasi admin, hingga pesanan selesai.</p>
                        <img src="{{ asset('front/diagram/flowchart.png') }}" alt="Flowchart Tukang Print Dadakan" class="img-responsive diagram-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>06.</span> Rancangan Database</h3>
            <ul>
                <li><strong>pengguna</strong>: menyimpan data admin dan pelanggan.</li>
                <li><strong>layanan</strong>: menyimpan jenis layanan yang tersedia.</li>
                <li><strong>pesanan</strong>: menyimpan data pemesanan pelanggan.</li>
                <li><strong>detail_pesanan</strong>: menyimpan rincian layanan dalam satu pesanan.</li>
                <li><strong>pembayaran</strong>: menyimpan metode dan status pembayaran.</li>
            </ul>
        </div>

        <div class="card-box">
            <h3><span>07.</span> Metode Pengembangan</h3>
            <div class="timeline">
                <div class="timeline-item">
                    <h4>Requirement Planning</h4>
                    <p>Menganalisis kebutuhan sistem berdasarkan proses bisnis Tukang Print Dadakan.</p>
                </div>
                <div class="timeline-item">
                    <h4>Design System</h4>
                    <p>Membuat rancangan flow sistem, database, fitur, dan antarmuka aplikasi.</p>
                </div>
                <div class="timeline-item">
                    <h4>Development</h4>
                    <p>Mengimplementasikan sistem menggunakan Laravel, Filament, Docker, dan MariaDB.</p>
                </div>
                <div class="timeline-item">
                    <h4>Testing</h4>
                    <p>Menguji halaman, form, upload file, CRUD admin, dan integrasi database.</p>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>08.</span> Hasil yang Diharapkan</h3>
            <ul>
                <li>Mahasiswa dapat melakukan pemesanan layanan secara online.</li>
                <li>Admin dapat mengelola data project, progress, pesan, dan dokumen dari dashboard.</li>
                <li>Proses pemesanan dan dokumentasi project menjadi lebih terstruktur.</li>
                <li>Website dapat menjadi portofolio akademik dan dasar pengembangan project akhir.</li>
            </ul>
        </div>

    </div>
</section>

<footer class="footer-project">
    <p>
        Project oleh:<br>
        <strong>20240801102 Ilham Firmansyah</strong><br>
        Teknik Informatika - Universitas Esa Unggul
    </p>
    <a href="{{ url('/') }}">Kembali ke halaman utama</a>
</footer>

</body>
</html>