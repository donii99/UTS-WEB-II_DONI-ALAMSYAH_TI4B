<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .jumbotron {
            background-color: #e9ecef;
            padding: 40px;
            border-radius: 10px;
        }
        .jumbotron h1 {
            color: #343a40;
        }
        .list-group-item {
            border: 1px solid rgba(0, 0, 0, 0.125);
            margin-bottom: 5px;
            border-radius: 5px;
        }
        .list-group-item a {
            display: block;
            color: #007bff;
            text-decoration: none;
        }
        .list-group-item a:hover {
            background-color: #f0f8ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang!</h1>
            <p class="lead">Ini adalah halaman utama aplikasi Sistem Informasi Mahasiswa.</p>
            <hr class="my-4">
            <p>Silakan pilih menu di bawah ini untuk mengelola data yang sesuai.</p>
        </div>

        <div class="list-group">
            <li class="list-group-item">
                <a href="mahasiswa.php">
                    <i class="fas fa-graduation-cap mr-2"></i> Data Mahasiswa
                </a>
            </li>
            <li class="list-group-item">
                <a href="jurusan.php">
                    <i class="fas fa-building mr-2"></i> Data Jurusan
                </a>
            </li>
            <li class="list-group-item">
                <a href="matakuliah.php">
                    <i class="fas fa-book mr-2"></i> Data Mata Kuliah
                </a>
            </li>
            <li class="list-group-item">
                <a href="nilai.php">
                    <i class="fas fa-file-alt mr-2"></i> Data Nilai
                </a>
            </li>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>