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