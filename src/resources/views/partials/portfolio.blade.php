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
                                <div class="iso-box {{ $project->kategori ?? 'web' }} col-md-4 col-sm-6 col-xs-12">
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