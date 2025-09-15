<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ordering Form Step 2</title>
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

    <div class="form-section">
        <form method="POST" action="{{ route('order.complete') }}">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="materials" class="form-label">Materials in Stock</label>
                    <input type="text" class="form-control" id="materials" name="materials" required>
                </div>

                <div class="col-md-6">
                    <label for="delivery" class="form-label">Delivery</label>
                    <input type="text" class="form-control" id="delivery" name="delivery" required>
                </div>

                <div class="col-md-6">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-orange px-5 py-2">CONFIRM</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
