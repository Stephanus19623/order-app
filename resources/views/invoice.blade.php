<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .invoice-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .invoice-header {
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .invoice-header h2 {
            font-weight: 700;
            color: #343a40;  
        }
        .invoice-details p {
            margin-bottom: 5px;
            font-size: 14px;
        }
        .address-section h3 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 5px;
        }
        .table th, .table td {
            font-size: 14px;
        }
        .table thead th {
            background-color: #f1f3f5;
            color: #495057;
        }
        .table tbody tr:last-child td {
            border-bottom: 2px solid #e9ecef;
        }
        .notes-section {
            border-top: 2px solid #e9ecef;
            padding-top: 20px;
            margin-top: 20px;
        }
        /* Menyembunyikan tombol saat dicetak */
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="container my-4 text-end no-print">
    <a href="{{ route('invoice.download') }}" class="btn btn-primary">
        Save to PDF
    <a href="{{ url('/') }}" class="btn btn-secondary">
        Back to Home
    </a>
</div>

<div class="container invoice-container">
    </div>
    </a>
</div>

<div class="container invoice-container">
    <div class="row invoice-header">
        <div class="col-6">
            <h1 class="text-primary fw-bold">INVOICE</h1>
        </div>
        <div class="col-6 text-end invoice-details">
            <h2 class="text-secondary">INVOICE</h2>
            <p><strong>Invoice # :</strong> </p>
            <p><strong>Tanggal :</strong> </p>
            <p><strong>Jatuh Tempo :</strong> </p>
        </div>
    </div>
    
    <div class="row address-section">
        <div class="col-6">
            <h3>Dari:</h3>
            <address>
                <strong>Nama Perusahaan Kamu</strong><br>
                Alamat Perusahaan<br>
                Kota, Kode Pos<br>
                Email: <br>
            </address>
        </div>
        <div class="col-6 text-end">
            <h3>Untuk:</h3>
            <address>
                <strong>Nama Pelanggan</strong><br>
                Alamat Pelanggan<br>
                Kota, Kode Pos<br>
                Email: <br>
            </address>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered item-table">
                <thead>
                    <tr>
                        <th class="text-start">Deskripsi Item</th>
                        <th class="text-center">Kuantitas</th>
                        <th class="text-end">Harga Satuan</th>
                        <th class="text-end">Total</th>
                    </tr>
                </thead>
                <tbody>
                    {{--
                    @foreach($items as $item)
                        <tr>
                            <td>{{ $item->description }}</td>
                            <td class="text-center">{{ $item->quantity }}</td>
                            <td class="text-end">Rp {{ number_format($item->unit_price, 0, ',', '.') }}</td>
                            <td class="text-end">Rp {{ number_format($item->total, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                    --}}
                </tbody>
            </table>
        </div>
    </div>

    <div class="row notes-section">
        <div class="col-12">
            <h3>Catatan:</h3>
            <p>Catatan tambahan pesanan.</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 text-center text-muted">
            <p>Terima kasih atas pesanan Anda!</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>