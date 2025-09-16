<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ordering Form</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e3f2fd;
            font-family: 'Segoe UI', sans-serif;
        }

        .form-title {
            background-color: #0d47a1;
            color: white;
            text-align: center;
            padding: 15px;
            border-radius: 5px 5px 0 0;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .form-section {
            background-color: white;
            padding: 30px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        label {
            font-weight: 500;
            color: #0d47a1;
        }

        .btn-orange {
            background-color: #f26522;
            color: white;
            font-weight: bold;
        }

        .btn-orange:hover {
            background-color: #d35400;
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-5" style="max-width: 900px;">
    <div class="form-title">Ordering Form</div>
    
    @if(session('success'))
        <div class="alert alert-success text-center mt-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-section">
        <form method="POST" action="{{ route('order.submit') }}">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="buyer_name" class="form-label">Buyer's Name</label>
                    <input type="text" class="form-control" id="buyer_name" name="buyer_name" required>
                </div>

                <div class="col-md-6">
                    <label for="parts_name" class="form-label">Parts Name</label>
                    <input type="text" class="form-control" id="parts_name" name="parts_name" required>
                </div>

                <div class="col-md-6">
                    <label for="company_name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" required>
                </div>

                <div class="col-md-6">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="due_date" name="due_date" required>
                </div>

                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-orange px-5 py-2">NEXT</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
