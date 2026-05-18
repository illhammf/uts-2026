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
            background: #f8fafc;
            color: #334155;
        }

        .hero {
            background: linear-gradient(135deg, #111827, #eb5424);
            color: #fff;
            padding: 90px 0;
            position: relative;
            overflow: hidden;
        }

        .hero:after {
            content: "";
            position: absolute;
            right: -120px;
            top: -120px;
            width: 350px;
            height: 350px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
        }

        .hero h1 {
            font-size: 52px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.8;
            max-width: 760px;
        }

        .badge-custom {
            display: inline-block;
            background: rgba(255,255,255,0.15);
            color: #fff;
            padding: 9px 16px;
            border-radius: 30px;
            margin: 5px 5px 15px 0;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-back {
            display: inline-block;
            margin-top: 25px;
            background: #fff;
            color: #eb5424;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
        }

        .btn-back:hover {
            background: #111827;
            color: #fff;
            text-decoration: none;
        }

        .section {
            padding: 65px 0;
        }

        .card-box {
            background: #fff;
            border-radius: 18px;
            padding: 35px;
            margin-bottom: 30px;
            box-shadow: 0 15px 40px rgba(15, 23, 42, 0.08);
            border: 1px solid #eef2f7;
        }

        .card-box h3 {
            color: #111827;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .card-box h3 span {
            color: #eb5424;
        }

        .card-box p,
        .card-box li {
            line-height: 1.8;
            font-size: 15px;
        }

        .feature-card {
            background: #fff;
            border-radius: 16px;
            padding: 28px;
            min-height: 230px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.07);
            margin-bottom: 25px;
            border-top: 4px solid #eb5424;
        }

        .feature-card i {
            font-size: 35px;
            color: #eb5424;
            margin-bottom: 15px;
        }

        .feature-card h4 {
            font-weight: 700;
            color: #111827;
        }

        .timeline {
            border-left: 4px solid #eb5424;
            padding-left: 25px;
        }

        .timeline-item {
            margin-bottom: 28px;
            position: relative;
        }

        .timeline-item:before {
            content: "";
            width: 16px;
            height: 16px;
            background: #eb5424;
            border-radius: 50%;
            position: absolute;
            left: -35px;
            top: 5px;
        }

        .timeline-item h4 {
            font-weight: 700;
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
        }

        .diagram-card {
            background: #fff7ed;
            border: 1px dashed #eb5424;
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .status-box {
            background: linear-gradient(135deg, #eb5424, #ff7b29);
            color: white;
            border-radius: 18px;
            padding: 35px;
        }

        .status-box h3 {
            color: white;
            font-weight: 700;
        }

        .footer-project {
            text-align: center;
            padding: 35px 0;
            background: #111827;
            color: #cbd5e1;
        }

        .footer-project a {
            color: #ff7b29;
            font-weight: 700;
        }
    </style>
</head>

<body>

<section class="hero">
    <div class="container">
        <span class="badge-custom">Project Akhir Pemrograman Web</span>
        <span class="badge-custom">Laravel</span>
        <span class="badge-custom">Docker</span>
        <span class="badge-custom">MariaDB</span>

        <h1>Tukang Print Dadakan</h1>

        <p>
            Sistem booking dan layanan print mahasiswa berbasis web menggunakan Laravel.
            Project ini dirancang untuk membantu mahasiswa melakukan pemesanan layanan print,
            fotokopi, jilid, laminating, bantuan formatting tugas, dan belajar bareng secara online.
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
                        Tukang Print Dadakan merupakan aplikasi web yang dibuat untuk membantu proses
                        pemesanan layanan print mahasiswa agar lebih praktis, cepat, dan terorganisir.
                        Sistem ini menyediakan fitur booking layanan, upload file, pilihan pembayaran,
                        upload bukti transfer, dashboard admin, serta integrasi WhatsApp.
                    </p>
                    <p>
                        Ide project ini berasal dari kebutuhan nyata mahasiswa yang sering membutuhkan
                        layanan print tugas, modul, laporan, proposal, atau gambar, tetapi tidak selalu
                        memiliki waktu untuk datang langsung ke tempat fotokopi.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="status-box">
                    <h3>Status Progress</h3>
                    <p>
                        Saat ini project berada pada tahap laporan awal, perancangan sistem,
                        pembuatan diagram, dan implementasi website portofolio.
                    </p>
                    <strong>Progress: 45%</strong>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>02.</span> Analisis Masalah</h3>
            <ul>
                <li>Proses pemesanan layanan print masih banyak dilakukan secara manual melalui WhatsApp.</li>
                <li>Data pesanan belum tersimpan secara sistematis dan berisiko salah pencatatan.</li>
                <li>Mahasiswa kesulitan melakukan pemesanan ketika memiliki deadline tugas mendadak.</li>
                <li>Belum tersedia sistem berbasis web untuk booking, upload file, dan validasi pembayaran.</li>
            </ul>
        </div>

        <div class="card-box">
            <h3><span>03.</span> Tujuan Project</h3>
            <ul>
                <li>Membuat aplikasi web layanan print mahasiswa berbasis Laravel.</li>
                <li>Membuat sistem booking online yang terstruktur dan mudah digunakan.</li>
                <li>Mengintegrasikan aplikasi dengan WhatsApp sebagai media komunikasi pelanggan.</li>
                <li>Membuat sistem pembayaran digital dan upload bukti transfer.</li>
            </ul>
        </div>

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
                    <p>Layanan penggandaan dokumen untuk kebutuhan akademik mahasiswa.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-book"></i>
                    <h4>Jilid & Laminating</h4>
                    <p>Layanan finishing dokumen seperti laporan, proposal, sertifikat, atau kartu.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-file-text"></i>
                    <h4>Formatting Tugas</h4>
                    <p>Bantuan merapikan margin, daftar isi, cover, penomoran halaman, dan format laporan.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-users"></i>
                    <h4>Belajar Bareng</h4>
                    <p>Layanan diskusi dan belajar santai untuk Word, PowerPoint, coding dasar, dan tugas.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-whatsapp"></i>
                    <h4>Integrasi WhatsApp</h4>
                    <p>Setelah booking, pengguna diarahkan ke WhatsApp admin dengan format pesan otomatis.</p>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>04.</span> Arsitektur dan Tech Stack</h3>
            <p>
                Project dikembangkan menggunakan konsep MVC atau Modern Framework dengan Laravel.
                Sistem berjalan pada environment Docker, menggunakan MariaDB sebagai database,
                serta Blade Template untuk tampilan halaman web.
            </p>

            <div class="tech-stack">
                <span>Laravel</span>
                <span>PHP</span>
                <span>Blade Template</span>
                <span>Docker</span>
                <span>MariaDB</span>
                <span>Visual Studio Code</span>
                <span>GitHub</span>
                <span>WhatsApp Integration</span>
            </div>
        </div>

        <div class="card-box">
            <h3><span>05.</span> Rencana Perancangan Sistem</h3>
            <p>
                Pada tahap perancangan sistem, dibuat beberapa diagram untuk menggambarkan struktur
                database dan alur kerja aplikasi “Tukang Print Dadakan”. Diagram ini menjadi acuan
                dalam proses implementasi sistem berbasis Laravel.
            </p>

            <div class="row">
                <div class="col-md-6">
                    <div class="diagram-preview">
                        <h4>Entity Relationship Diagram (ERD)</h4>
                        <p>
                            ERD digunakan untuk menggambarkan hubungan antar entitas seperti pengguna,
                            layanan, pesanan, detail pesanan, dan pembayaran.
                        </p>
                        <img src="{{ asset('front/diagram/erd.png') }}" alt="ERD Tukang Print Dadakan" class="img-responsive diagram-img">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="diagram-preview">
                        <h4>Flowchart Sistem</h4>
                        <p>
                            Flowchart digunakan untuk menjelaskan alur proses mulai dari login,
                            pemesanan, pembayaran, validasi admin, hingga pesanan selesai.
                        </p>
                        <img src="{{ asset('front/diagram/flowchart.png') }}" alt="Flowchart Tukang Print Dadakan" class="img-responsive diagram-img">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>06.</span> Rancangan Database</h3>
            <p>Database menggunakan penamaan tabel berbahasa Indonesia agar mudah dipahami.</p>

            <ul>
                <li><strong>pengguna</strong>: menyimpan data admin dan pengguna aplikasi.</li>
                <li><strong>layanan</strong>: menyimpan data layanan yang tersedia.</li>
                <li><strong>pesanan</strong>: menyimpan data pemesanan pelanggan.</li>
                <li><strong>detail_pesanan</strong>: menyimpan detail layanan dalam satu pesanan.</li>
                <li><strong>pembayaran</strong>: menyimpan metode dan status pembayaran pelanggan.</li>
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
                    <p>Mengimplementasikan sistem menggunakan Laravel, Blade, Docker, dan MariaDB.</p>
                </div>

                <div class="timeline-item">
                    <h4>Testing</h4>
                    <p>Menguji fitur menggunakan metode Black Box Testing.</p>
                </div>

                <div class="timeline-item">
                    <h4>Evaluation & Release</h4>
                    <p>Melakukan evaluasi, perbaikan, dan menyiapkan sistem agar dapat digunakan.</p>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>08.</span> Hasil yang Diharapkan</h3>
            <ul>
                <li>Membantu mahasiswa melakukan pemesanan layanan secara online.</li>
                <li>Mempermudah pengelolaan pesanan pelanggan.</li>
                <li>Membantu digitalisasi layanan print mahasiswa.</li>
                <li>Mempermudah komunikasi antara pelanggan dan admin.</li>
                <li>Meningkatkan efisiensi proses pemesanan layanan.</li>
            </ul>
        </div>

    </div>
</section>

<footer class="footer-project">
    <p>
        Project oleh: <br> <strong>20240801102 Ilham Firmansyah</strong> · Teknik Informatika <br> Universitas Esa Unggul
    </p>
    <a href="{{ url('/') }}">Kembali ke halaman utama</a>
</footer>

</body>
</html>