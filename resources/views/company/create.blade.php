<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0e7ff;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
        }
        .header-bar {
            background-color: #2b3990;
            color: white;
            padding: 1rem;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin-bottom: 2rem;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 0.75rem;
        }
        .btn-next {
            background-color: #f77f00;
            color: white;
            font-weight: bold;
            padding: 0.75rem 2rem;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-5 form-container">
            <div class="header-bar text-center">
                <h2>Register Company</h2>
            </div>
            <form action="{{ route('company.store') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="col-md-6">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mt-4">
                    <button type="submit" class="btn btn-next">NEXT</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Gunakan console.log untuk debugging
        console.log('Script di halaman ini berhasil dijalankan.');
        
        // Cek apakah ada flash message 'success'
        if ("{{ session('success') }}") {
            console.log('Flash message ditemukan:', "{{ session('success') }}");
            Swal.fire({
                icon: 'success',
                title: 'Registry Success!',
                html: '<div style="color: #333;">Please go back to homepage in order to place an order.</div>',
                showConfirmButton: true,
                confirmButtonText: 'Homepage',
                confirmButtonColor: '#f77f00',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/";
                }
            });
        }
    </script>
</body>
</html>