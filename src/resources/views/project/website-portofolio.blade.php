<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project - Website Portofolio</title>

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
            background: linear-gradient(135deg, #111827, #2563eb);
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
            color: #2563eb;
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
            color: #2563eb;
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
            min-height: 220px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.07);
            margin-bottom: 25px;
            border-top: 4px solid #2563eb;
        }

        .feature-card i {
            font-size: 35px;
            color: #2563eb;
            margin-bottom: 15px;
        }

        .feature-card h4 {
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

        .status-box {
            background: linear-gradient(135deg, #2563eb, #38bdf8);
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
            color: #38bdf8;
            font-weight: 700;
        }
    </style>
</head>

<body>

<section class="hero">
    <div class="container">
        <span class="badge-custom">UTS Pemrograman Web</span>
        <span class="badge-custom">Portfolio Website</span>
        <span class="badge-custom">Laravel Blade</span>
        <span class="badge-custom">Dynamic Contact</span>

        <h1>Website Portofolio</h1>

        <p>
            Website Portofolio adalah halaman personal yang dibuat untuk menampilkan profil,
            stack keahlian, showcase project, detail laporan awal project akhir, dan form kontak
            dinamis yang terhubung ke database.
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
                        Website ini dibuat sebagai media portofolio personal Ilham Firmansyah
                        sekaligus sebagai tempat menampilkan progress project akhir
                        <strong>Tukang Print Dadakan</strong>.
                    </p>
                    <p>
                        Website ini mendukung kebutuhan UTS Pemrograman Web karena memiliki
                        halaman Home/About, Showcase Project, Contact dinamis, serta halaman detail
                        project yang menampilkan laporan awal dan rancangan sistem.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="status-box">
                    <h3>Status Progress</h3>
                    <p>
                        Website portofolio sudah memiliki landing page, showcase project,
                        halaman detail project, contact form, dan dashboard admin.
                    </p>
                    <strong>Progress: 90%</strong>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>02.</span> Tujuan Website</h3>
            <ul>
                <li>Menampilkan identitas profesional sebagai mahasiswa dan web developer.</li>
                <li>Menampilkan daftar project yang pernah atau sedang dibuat.</li>
                <li>Menyediakan halaman detail laporan awal project akhir.</li>
                <li>Menyediakan form kontak yang datanya tersimpan ke database.</li>
                <li>Mendukung penilaian UTS Pemrograman Web berbasis Laravel.</li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-home"></i>
                    <h4>Home / About</h4>
                    <p>Berisi profil singkat, bio, dan stack keahlian sebagai web developer.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-folder-open"></i>
                    <h4>Showcase Project</h4>
                    <p>Menampilkan daftar project seperti Tukang Print Dadakan dan Website Portofolio.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fa fa-envelope"></i>
                    <h4>Contact Dinamis</h4>
                    <p>Form kontak dapat menyimpan nama, email, subjek, dan pesan ke database.</p>
                </div>
            </div>
        </div>

        <div class="card-box">
            <h3><span>03.</span> Arsitektur & Tech Stack</h3>
            <p>
                Website ini dikembangkan menggunakan Laravel dengan konsep MVC.
                Tampilan dibuat menggunakan Blade Template, sedangkan data project,
                progress project, dan pesan kontak dikelola melalui dashboard admin Filament.
            </p>

            <div class="tech-stack">
                <span>Laravel</span>
                <span>PHP</span>
                <span>Blade Template</span>
                <span>Bootstrap</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>Docker</span>
                <span>MariaDB</span>
                <span>Filament Admin</span>
                <span>GitHub</span>
            </div>
        </div>

        <div class="card-box">
            <h3><span>04.</span> Implementasi Dinamis</h3>
            <ul>
                <li><strong>Project:</strong> data project dapat dikelola melalui admin panel.</li>
                <li><strong>Project Progress:</strong> progress laporan project akhir dapat diperbarui secara dinamis.</li>
                <li><strong>Contact Message:</strong> pesan dari form kontak masuk ke database.</li>
                <li><strong>Admin Panel:</strong> menggunakan Filament untuk CRUD data.</li>
            </ul>
        </div>

        <div class="card-box">
            <h3><span>05.</span> Kesesuaian dengan Soal UTS</h3>
            <ul>
                <li>Memiliki halaman Home/About.</li>
                <li>Memiliki halaman Showcase/Project.</li>
                <li>Memiliki Contact Form dinamis.</li>
                <li>Memiliki detail laporan awal project akhir.</li>
                <li>Menggunakan Laravel sebagai modern framework berbasis MVC.</li>
                <li>Memiliki CRUD melalui dashboard admin Filament.</li>
                <li>Source code dipush ke GitHub.</li>
            </ul>
        </div>

    </div>
</section>

<footer class="footer-project">
    <p>
        Project oleh <strong>Ilham Firmansyah</strong> · Teknik Informatika · Universitas Esa Unggul
    </p>
    <a href="{{ url('/') }}">Kembali ke halaman utama</a>
</footer>

</body>
</html>