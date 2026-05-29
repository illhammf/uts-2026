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
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portofolio {{ $nama }}</title>

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/templatemo-style.css') }}">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600,700" rel="stylesheet" type="text/css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body data-spy="scroll" data-target="#rock-navigation" x-data="{ darkMode: false }" :class="{ 'dark-mode': darkMode }">

    @include('partials.navbar')
    @include('partials.home')
    @include('partials.work')
    @include('partials.portfolio')
    @include('partials.resume')
    @include('partials.about')
    @include('partials.social')
    @include('partials.contact')
    @include('partials.scripts')

</body>
</html>