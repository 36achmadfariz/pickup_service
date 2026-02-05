<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
        }
        p {
            font-size: 1.2em;
            margin-bottom: 40px;
        }
        .btn {
            background-color: #ff9800;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: #e68900;
            transform: scale(1.05);
        }
        footer {
            position: absolute;
            bottom: 20px;
            font-size: 0.9em;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Pickup Service Kantor Pos Cilegon!</h1>
    <p>Mengelola permintaan pickup dengan cepat, mudah, dan efisien.<br>
       Klik tombol di bawah untuk melihat atau melakukan order pickup.</p>
    <a href="{{ route('pickup_requests.index') }}" class="btn">Lihat Pickup Requests</a>

    <footer>
        &copy; 2026 Pickup Service - Dibuat untuk Tugas Pemrograman 1
    </footer>
</body>
</html>
