<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Sertifikasi</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Tambahkan CSS kustom di sini */
    </style>
</head>
<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Aplikasi Sertifikasi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('skema.index') }}">Skema Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('peserta.index') }}">Peserta Sertifikasi</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-light text-center py-3 mt-4">
        <div class="container">
            <span>Copyright &copy; 2022 | Aplikasi Sertifikasi</span>
        </div>
    </footer>

    <!-- Tambahkan Bootstrap JS (jQuery dan Popper.js diperlukan untuk beberapa komponen Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
