<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registry Success!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0e7ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .success-modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparan overlay */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1050; /* Di atas elemen lain */
        }
        .success-modal-content {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            padding: 40px;
            text-align: center;
            max-width: 400px;
            width: 90%;
            position: relative;
            z-index: 1051;
            /* Tambahan untuk meniru bentuk seperti gambar */
            border-top: 20px solid #5a7dbe; /* Warna biru di atas */
        }
        .success-modal-header {
            background-color: #5a7dbe;
            color: white;
            padding: 10px 20px;
            border-radius: 5px 5px 0 0;
            position: absolute;
            top: -20px; /* Dorong ke atas agar menumpuk border-top */
            left: 50%;
            transform: translateX(-50%);
            width: 80%; /* Lebar header */
            box-sizing: border-box;
            font-weight: bold;
            display: none; /* Kita tidak pakai header tulisan di atas, tapi langsung kotak biru. Ini dihilangkan saja */
        }
        .success-message {
            margin-top: 20px; /* Jarak dari "Registry Success!" ke teks di bawahnya */
            color: #333;
            font-size: 1.1em;
            line-height: 1.5;
        }
        .btn-homepage {
            background-color: #f77f00;
            color: white;
            font-weight: bold;
            padding: 10px 30px;
            border-radius: 5px;
            border: none;
            margin-top: 30px;
            cursor: pointer;
            text-decoration: none; /* Untuk link */
        }
        .btn-homepage:hover {
            background-color: #e07000;
            color: white;
        }
    </style>
</head>
<body>
    <div class="success-modal-backdrop">
        <div class="success-modal-content">
            <h3 style="color: #333; margin-top: 10px; font-weight: bold;">Registry Success!</h3>
            <p class="success-message">
                Please go back to homepage in order to place an order.
            </p>
            <a href="#" class="btn btn-homepage">Homepage</a>
        </div>
    </div>
</body>
</html>