<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pickup Requests</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>📦 Daftar Pickup Requests</h3>
        <a href="{{ route('pickup_requests.create') }}" class="btn btn-success">
            + Tambah Request
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat Pickup</th>
                        <th>Tanggal</th>
                        <th>No HP</th>
                        <th>Status</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($pickupRequests as $r)
                    <tr>
                        <td>{{ $r->id }}</td>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->pickup_address }}</td>
                        <td>{{ $r->pickup_date }}</td>
                        <td>{{ $r->phone }}</td>
                        <td>
                            <span class="badge bg-{{ $r->status == 'pending' ? 'warning' : 'success' }}">
                                {{ ucfirst($r->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('pickup_requests.edit', $r->id) }}" class="btn btn-sm btn-primary">Edit</a>

                            <form action="{{ route('pickup_requests.destroy', $r->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">
                            Belum ada data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>
