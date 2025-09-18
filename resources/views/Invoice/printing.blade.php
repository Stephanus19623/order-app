<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Printing</title>
    <style>
        /* CSS untuk mengatur tampilan halaman */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e6f0ff; /* Warna latar belakang biru muda */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
        }

        h1 {
            color: #0d47a1; /* Warna biru tua untuk judul */
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .invoice-content {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
            height: 300px;
            box-sizing: border-box; /* Agar padding tidak menambah lebar total */
            font-size: 1em;
            resize: vertical; /* Memungkinkan pengguna mengubah tinggi textarea */
            margin-bottom: 30px;
        }
        
        .homepage-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #e94560; /* Warna merah */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 1em;
        }

        .save-btn {
            background-color: #f39c12; /* Warna oranye */
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .save-btn:hover {
            background-color: #e67e22; /* Warna oranye lebih gelap saat di-hover */
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<body>

    <a href="#" class="homepage-btn">Homepage</a>

    <div class="container" id="invoice-to-print">
        <h1>Invoice Printing</h1>
        
        <textarea class="invoice-content" placeholder="Ketik atau paste konten invoice di sini..."></textarea>
    </div>

    <button class="save-btn" onclick="saveToPDF()">Save to PDF</button>

    <script>
        // Fungsi JavaScript untuk menyimpan konten sebagai PDF
        function saveToPDF() {
            // Elemen yang akan diubah menjadi PDF
            const element = document.getElementById('invoice-to-print');
            
            // Opsi untuk konfigurasi file PDF
            const opt = {
              margin:       1,
              filename:     'invoice.pdf',
              image:        { type: 'jpeg', quality: 0.98 },
              html2canvas:  { scale: 2 },
              jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            
            // Membuat dan menyimpan file PDF
            html2pdf().from(element).set(opt).save();
        }
    </script>

</body>
</html>