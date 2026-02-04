<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pickup Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #2563eb, #1e40af);
            color: white;
        }
        .container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .box {
            background: rgba(255,255,255,0.12);
            padding: 40px;
            border-radius: 12px;
            width: 90%;
            max-width: 500px;
        }
        h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }
        p {
            opacity: 0.9;
        }
        a {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 30px;
            background: #22c55e;
            color: #064e3b;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }
        a:hover {
            background: #16a34a;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="box">
        <h1>Pickup Service</h1>
        <p>
            Sistem pengajuan pickup barang berbasis web.<br>
            Cepat, rapi, dan terintegrasi.
        </p>

        <a href="/pickup_requests">
            Ajukan Pickup
        </a>
    </div>
</div>

</body>
</html>
