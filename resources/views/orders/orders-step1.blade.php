<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordering Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e6f2ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background: white;
      width: 600px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 20px;
    }
    .form-header {
      background: #004a99;
      color: white;
      padding: 15px;
      text-align: center;
      font-weight: bold;
      font-size: 20px;
      border-radius: 8px 8px 0 0;
    }
    .form-body {
      padding: 20px;
    }
    .form-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
    }
    .form-row label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .form-row input {
      width: 250px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-footer {
      text-align: center;
      margin-top: 20px;
    }
    .form-footer button {
      background: #ff6600;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }
    .form-footer button:hover {
      background: #e65c00;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="form-header">Ordering Form</div>
    <div class="form-body">
      <form action="{{ route('order.submit.step1') }}" method="POST">
        @csrf

        <div class="form-row">
          <div>
            <label>Buyer's Name</label>
            <input type="text" name="buyer_name" required>
          </div>
          <div>
            <label>Parts Name</label>
            <input type="text" name="parts_name" required>
          </div>
        </div>

        <div class="form-row">
          <div>
            <label>Company Name</label>
            <input type="text" name="company_name" required>
          </div>
          <div>
            <label>Due Date</label>
            <input type="date" name="due_date" required>
          </div>
        </div>

        <div class="form-row">
          <div>
            <label>Address</label>
            <input type="text" name="address" required>
          </div>
          <div>
            <label>Email</label>
            <input type="email" name="email" required>
          </div>
        </div>

        <div class="form-footer">
          <button type="submit">NEXT</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
