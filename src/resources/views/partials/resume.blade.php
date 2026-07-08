<!-- START RESUME -->
<section id="resume" class="tm-padding-top-bottom-100">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <h2 class="title">Profil <strong>Saya</strong></h2>

                @if ($profile?->foto)
                <div style="margin-bottom: 25px; max-width: 170px;">
                    <img
                        src="{{ asset('storage/' . $profile->foto) }}"
                        alt="{{ $nama }}"
                        class="img-responsive"
                        style="width: 100%; max-width: 170px; height: auto; aspect-ratio: 1/1; object-fit: cover; border-radius: 50%; border: 5px solid #eb5424;">
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
                    Beberapa teknologi atau skill yang sedang saya pelajari dan gunakan dalam pengembangan project
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