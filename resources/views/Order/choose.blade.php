<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pilih Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f4f7fa, #eaf3ff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.15);
            width: 100%;
            max-width: 700px;
            animation: fadeIn 0.8s ease-in-out;
        }
        .card-header {
            background: linear-gradient(90deg, #0d6efd, #0a58ca);
            color: #fff;
            font-weight: 700;
            font-size: 30px;
            text-align: center;
            padding: 25px;
        }
        .card-header i {
            font-size: 42px;
            margin-right: 10px;
        }
        .card-body {
            padding: 40px;
        }
        .form-label {
            font-weight: 600;
            font-size: 18px;
        }
        .form-select {
            border-radius: 12px;
            padding: 14px;
            font-size: 16px;
        }
        .form-select:focus {
            box-shadow: 0 0 10px rgba(13,110,253,0.6);
            transform: scale(1.02);
        }
        .btn-search {
            background: linear-gradient(90deg, #fd7e14, #ff922b);
            color: white;
            border-radius: 12px;
            font-weight: 600;
            padding: 15px 20px;
            font-size: 18px;
            transition: 0.3s ease;
            width: 100%;
        }
        .btn-search:hover {
            background: linear-gradient(90deg, #e7680c, #ff7f0f);
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 6px 14px rgba(0,0,0,0.2);
        }
        .subtitle {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 30px;
            text-align: center;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header d-flex justify-content-center align-items-center">
            <i class="bi bi-buildings"></i> Pilih Perusahaan
        </div>
        <div class="card-body">
            <p class="subtitle">Silakan pilih perusahaan Anda untuk melihat daftar order</p>
            <form method="POST" action="{{ route('orders.listByCompany') }}">
                @csrf
                <div class="mb-4">
                    <label for="company" class="form-label">Select Company</label>
                    <select name="company_id" id="company" class="form-select form-select-lg shadow-sm" required>
                        <option value="">-- Choose Company --</option>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-search">
                    <i class="bi bi-search"></i> Search Orders
                </button>
            </form>
        </div>
    </div>
</body>
</html>
