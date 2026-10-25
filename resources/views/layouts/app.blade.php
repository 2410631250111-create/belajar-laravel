```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f9;
        }

        nav {
            background-color: #2c3e50;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .container {
            padding: 20px;
        }

        .dashboard-cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            min-width: 150px;
            box-shadow: 0 2px 5px #ddd;
        }

        .card h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/dashboard">Dashboard</a>
        <a href="/books">Buku</a>
        <a href="/categories">Kategori</a>
        <a href="/members">Anggota</a>
    </nav>

    @yield('content')
</body>
</html>
