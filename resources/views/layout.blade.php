<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/jadwal">Jadwal Belajar</a></li>
                <li><a href="/paket">Paket Jasa</a></li>
                <li><a href="/trainer">Trainer</a></li>
                <li><a href="/kendaraan">Kendaraan</a></li>
                <li><a href="/kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2023 Perusahaan Stir Mobil</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
