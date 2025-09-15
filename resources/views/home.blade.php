<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e6f2ff;
        }
        .header {
            background-color: #1d4e89;
            padding: 15px;
            text-align: center;
            color: white;
            font-weight: bold;
            font-size: 22px;
        }
        .form-box {
            background: #ffffffcc;
            border-radius: 8px;
            padding: 25px;
            margin-top: 50px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .btn-orange {
            background-color: #f26522;
            color: white;
            font-weight: bold;
        }
        .btn-orange:hover {
            background-color: #d35400;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        Invoice Check
    </div>

    <!-- Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-box text-center">
                    <form action="{{ route('invoice.check.search') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Input your Order Number below</label>
                            <input type="text" name="order_number" class="form-control" placeholder="Enter Order Number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select your Company</label>
                            <input type="text" name="company" class="form-control" placeholder="Enter Company Name" required>
                        </div>
                        <button type="submit" class="btn btn-orange w-100">Search Invoice</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
