<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tambah Pickup Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-body">

            <h4 class="mb-3">➕ Tambah Pickup Request</h4>

            <form action="{{ route('pickup_requests.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat Pickup</label>
                    <input type="text" name="pickup_address" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Pickup</label>
                    <input type="date" name="pickup_date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="pending">Pending</option>
                        <option value="picked_up">Picked Up</option>
                    </select>
                </div>

                <button class="btn btn-success">💾 Simpan</button>
                <a href="{{ route('pickup_requests.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>

</body>
</html>
