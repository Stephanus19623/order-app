<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Order</title>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>
<body>
    <div class="container" style="max-width:600px;margin:3rem auto;padding:2rem;background:#fff;border-radius:12px;box-shadow:0 4px 10px rgba(0,0,0,0.1);">
        <h2 style="text-align:center;margin-bottom:1.5rem;color:var(--primary);">Form Order</h2>

        <!-- Notifikasi sukses -->
        @if(session('success'))
            <p style="padding:1rem;background:#d1fae5;color:#065f46;border-radius:8px;">
                {{ session('success') }}
            </p>
        @endif

        <form method="POST" action="{{ route('orders.store') }}">
            @csrf
            <div style="margin-bottom:1rem;">
                <label for="product">Nama Produk</label><br>
                <input type="text" name="product" id="product" required style="width:100%;padding:0.5rem;border:1px solid #ccc;border-radius:8px;">
            </div>

            <div style="margin-bottom:1rem;">
                <label for="quantity">Jumlah</label><br>
                <input type="number" name="quantity" id="quantity" min="1" required style="width:100%;padding:0.5rem;border:1px solid #ccc;border-radius:8px;">
            </div>

            <div style="margin-bottom:1rem;">
                <label for="notes">Catatan (opsional)</label><br>
                <textarea name="notes" id="notes" rows="3" style="width:100%;padding:0.5rem;border:1px solid #ccc;border-radius:8px;"></textarea>
            </div>

            <button type="submit" class="btn-main" style="width:100%;">Simpan Order</button>
        </form>

        <div style="text-align:center;margin-top:1.5rem;">
            <a href="{{ url('/') }}" class="btn-secondary">⬅ Kembali ke Homepage</a>
        </div>
    </div>
</body>
</html>
<!-- Tombol Invoice Check diarahkan ke halaman form invoice -->