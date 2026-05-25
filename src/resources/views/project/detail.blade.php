<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->judul }}</title>

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/templatemo-style.css') }}">

    <style>
        body {
            background: #f5f7fb;
            color: #334155;
            font-family: 'Raleway', sans-serif;
        }

        .project-hero {
            min-height: 430px;
            background:
                linear-gradient(135deg, rgba(17, 24, 39, .96), rgba(235, 84, 36, .88)),
                url('{{ $project->gambar ? asset('storage/' . $project->gambar) : asset('front/images/portfolio-img1.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            display: flex;
            align-items: center;
            padding: 90px 0 70px;
            position: relative;
            overflow: hidden;
        }

        .project-hero::after {
            content: "";
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: rgba(255,255,255,.08);
            position: absolute;
            right: -70px;
            top: -70px;
        }

        .project-badge {
            display: inline-block;
            padding: 9px 18px;
            border-radius: 999px;
            background: rgba(255,255,255,.16);
            border: 1px solid rgba(255,255,255,.25);
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 18px;
            text-transform: uppercase;
        }

        .project-hero h1 {
            font-size: 48px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .project-hero p {
            max-width: 760px;
            font-size: 18px;
            line-height: 32px;
            color: #f8fafc;
        }

        .hero-actions {
            margin-top: 28px;
        }

        .btn-back,
        .btn-report {
            display: inline-block;
            padding: 13px 22px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            margin-right: 10px;
            transition: .25s;
        }

        .btn-back {
            background: #ffffff;
            color: #eb5424;
        }

        .btn-report {
            background: #111827;
            color: #ffffff;
            border: 1px solid rgba(255,255,255,.25);
        }

        .btn-back:hover,
        .btn-report:hover {
            transform: translateY(-2px);
            text-decoration: none;
            color: #ffffff;
            background: #eb5424;
        }

        .content-section {
            padding: 60px 0;
        }

        .summary-grid {
            margin-top: -105px;
            position: relative;
            z-index: 3;
        }

        .summary-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 18px 40px rgba(15, 23, 42, .10);
            border: 1px solid #eef2f7;
            min-height: 130px;
            margin-bottom: 25px;
        }

        .summary-card i {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: #fff1eb;
            color: #eb5424;
            text-align: center;
            line-height: 48px;
            font-size: 22px;
            margin-bottom: 14px;
        }

        .summary-card h4 {
            font-weight: 800;
            color: #111827;
            margin-bottom: 6px;
        }

        .summary-card p {
            margin: 0;
            color: #64748b;
            line-height: 24px;
        }

        .project-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 34px;
            margin-bottom: 28px;
            box-shadow: 0 14px 35px rgba(15, 23, 42, .07);
            border: 1px solid #eef2f7;
        }

        .project-card h3 {
            margin-bottom: 18px;
            font-weight: 800;
            color: #111827;
            position: relative;
            padding-left: 16px;
        }

        .project-card h3::before {
            content: "";
            width: 5px;
            height: 28px;
            background: #eb5424;
            border-radius: 999px;
            position: absolute;
            left: 0;
            top: 0;
        }

        .project-card p {
            color: #475569;
            line-height: 30px;
            font-size: 16px;
        }

        .tech-pill {
            display: inline-block;
            background: #fff1eb;
            color: #eb5424;
            padding: 8px 14px;
            border-radius: 999px;
            margin: 5px 5px 5px 0;
            font-weight: 700;
            font-size: 13px;
        }

        .progress-item {
            background: #f8fafc;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 18px;
            border: 1px solid #e5e7eb;
        }

        .progress-item h4 {
            font-weight: 800;
            color: #111827;
            margin-bottom: 8px;
        }

        .progress-percent {
            float: right;
            color: #eb5424;
            font-weight: 800;
        }

        .progress {
            height: 18px;
            border-radius: 999px;
            background: #e5e7eb;
            box-shadow: none;
            overflow: hidden;
            margin-top: 12px;
        }

        .progress-bar {
            background: linear-gradient(135deg, #eb5424, #ff7b29);
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            line-height: 18px;
        }

        .diagram-img {
            width: 100%;
            border-radius: 16px;
            margin-top: 15px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, .12);
            border: 1px solid #e5e7eb;
            background: #ffffff;
        }

        .empty-text {
            background: #f8fafc;
            padding: 18px;
            border-radius: 14px;
            color: #64748b;
            border: 1px dashed #cbd5e1;
        }

        .report-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            background: linear-gradient(135deg, #fff1eb, #ffffff);
            border-radius: 18px;
            padding: 24px;
            border: 1px solid #fed7c3;
        }

        .report-box i {
            font-size: 44px;
            color: #eb5424;
            margin-right: 15px;
        }

        .report-info {
            display: flex;
            align-items: center;
        }

        .report-info h4 {
            margin: 0 0 6px;
            font-weight: 800;
            color: #111827;
        }

        .report-info p {
            margin: 0;
            color: #64748b;
        }

        .btn-download {
            background: #eb5424;
            color: #ffffff;
            padding: 13px 22px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 800;
            transition: .25s;
        }

        .btn-download:hover {
            background: #111827;
            color: #ffffff;
            text-decoration: none;
            transform: translateY(-2px);
        }

        .footer-detail {
            padding: 30px 0 50px;
            text-align: center;
            color: #64748b;
        }

        @media (max-width: 768px) {
            .project-hero h1 {
                font-size: 34px;
            }

            .project-hero p {
                font-size: 16px;
            }

            .project-card {
                padding: 24px;
            }

            .summary-grid {
                margin-top: -60px;
            }
        }
    </style>
</head>
<body>

<section class="project-hero">
    <div class="container">
        <span class="project-badge">
            {{ strtoupper($project->status_project) }}
        </span>

        <h1>{{ $project->judul }}</h1>

        <p>{{ $project->deskripsi_singkat }}</p>

        <div class="hero-actions">
            <a href="{{ url('/') }}" class="btn-back">
                <i class="fa fa-arrow-left"></i>
                Kembali ke Portfolio
            </a>

            @if($project->file_laporan)
                <a href="{{ asset('storage/' . $project->file_laporan) }}" target="_blank" class="btn-report">
                    <i class="fa fa-file-pdf-o"></i>
                    Lihat Laporan
                </a>
            @endif
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">

        <div class="row summary-grid">
            <div class="col-md-4 col-sm-4">
                <div class="summary-card">
                    <i class="fa fa-folder-open"></i>
                    <h4>Status Project</h4>
                    <p>{{ ucfirst($project->status_project) }}</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="summary-card">
                    <i class="fa fa-line-chart"></i>
                    <h4>Total Progress</h4>
                    <p>{{ $project->progresses->count() }} tahapan progress tercatat</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="summary-card">
                    <i class="fa fa-code"></i>
                    <h4>Tech Stack</h4>
                    <p>{{ $project->tech_stack ?: 'Belum tersedia' }}</p>
                </div>
            </div>
        </div>

        <div class="project-card">
            <h3>Analisis Masalah</h3>

            @if($project->analisis_masalah)
                <p>{{ $project->analisis_masalah }}</p>
            @else
                <p class="empty-text">Analisis masalah belum ditambahkan.</p>
            @endif
        </div>

        <div class="project-card">
            <h3>Kebutuhan Sistem</h3>

            @if($project->kebutuhan_sistem)
                <p>{{ $project->kebutuhan_sistem }}</p>
            @else
                <p class="empty-text">Kebutuhan sistem belum ditambahkan.</p>
            @endif
        </div>

        <div class="project-card">
            <h3>Arsitektur Sistem</h3>

            @if($project->arsitektur)
                <p>{{ $project->arsitektur }}</p>
            @else
                <p class="empty-text">Arsitektur sistem belum ditambahkan.</p>
            @endif
        </div>

        <div class="project-card">
            <h3>Tech Stack</h3>

            @if($project->tech_stack)
                @foreach(explode(',', $project->tech_stack) as $stack)
                    <span class="tech-pill">{{ trim($stack) }}</span>
                @endforeach
            @else
                <p class="empty-text">Tech stack belum ditambahkan.</p>
            @endif
        </div>

        <div class="project-card">
            <h3>Progress Project</h3>

            @forelse ($project->progresses as $progress)
                <div class="progress-item">
                    <h4>
                        {{ $progress->judul_progress }}
                        <span class="progress-percent">{{ $progress->persentase }}%</span>
                    </h4>

                    <p>{{ $progress->deskripsi_progress }}</p>

                    <div class="progress">
                        <div class="progress-bar"
                            role="progressbar"
                            style="width: {{ $progress->persentase }}%;">
                            {{ $progress->status }}
                        </div>
                    </div>
                </div>
            @empty
                <p class="empty-text">Belum ada progress project.</p>
            @endforelse
        </div>

        @if($project->gambar_erd)
            <div class="project-card">
                <h3>Entity Relationship Diagram (ERD)</h3>

                <p>
                    Diagram ERD digunakan untuk menggambarkan struktur data, entitas,
                    atribut, serta relasi antar tabel dalam sistem.
                </p>

                <img
                    src="{{ asset('storage/' . $project->gambar_erd) }}"
                    class="diagram-img"
                    alt="ERD">
            </div>
        @endif

        @if($project->gambar_flowchart)
            <div class="project-card">
                <h3>Flowchart Sistem</h3>

                <p>
                    Flowchart digunakan untuk menjelaskan alur kerja sistem dari awal proses
                    hingga menghasilkan output yang dibutuhkan pengguna.
                </p>

                <img
                    src="{{ asset('storage/' . $project->gambar_flowchart) }}"
                    class="diagram-img"
                    alt="Flowchart">
            </div>
        @endif

        @if($project->file_laporan)
            <div class="project-card">
                <h3>Laporan Project</h3>

                <div class="report-box">
                    <div class="report-info">
                        <i class="fa fa-file-pdf-o"></i>
                        <div>
                            <h4>Dokumen Laporan Awal Project Akhir</h4>
                            <p>
                                File laporan dapat dibuka atau diunduh sebagai bukti dokumentasi project.
                            </p>
                        </div>
                    </div>

                    <a
                        href="{{ asset('storage/' . $project->file_laporan) }}"
                        target="_blank"
                        class="btn-download">
                        <i class="fa fa-download"></i>
                        Download PDF
                    </a>
                </div>
            </div>
        @endif

    </div>
</section>

<div class="footer-detail">
    <div class="container">
        <p>
            &copy; 2026 Detail Project - 20240801102 Ilham Firmansyah
        </p>
    </div>
</div>

</body>
</html>