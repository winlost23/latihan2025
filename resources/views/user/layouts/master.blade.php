<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f7f9fc;
        }
        .navbar {
            background: #0d6efd !important;
        }
        .navbar a {
            color: #fff !important;
            font-weight: 500;
            margin-right: 20px;
        }
        .hero {
            padding: 80px 0;
            background: linear-gradient(135deg, #0d6efd, #4dabff);
            color: white;
        }
        .card-custom {
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        footer {
            background: #0d6efd;
            padding: 20px;
            text-align: center;
            color: white;
            margin-top: 50px;
        }
    </style>

    @stack('styles')
</head>
<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark px-4">
        <a class="navbar-brand fw-bold" href="/">MyWebsite</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'fw-semibold text-warning' : '' }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/profil') ? 'fw-semibold text-warning' : '' }}" href="/profil">Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/kontak') ? 'fw-semibold text-warning' : '' }}" href="/kontak">Kontak Kami</a>
                </li>

            </ul>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <div class="container my-5">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer>
        © {{ date('Y') }} MyWebsite — Dibuat dengan ❤️ oleh Unggul
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>
</html>
