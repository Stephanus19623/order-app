<!DOCTYPE html>
<html>
<head>
    <title>Ordering Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Ordering Form</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="row mb-3">
                        <div class="col">
                            <label>Buyer's Name</label>
                            <input type="text" class="form-control" placeholder="Enter buyer name">
                        </div>
                        <div class="col">
                            <label>Parts Name</label>
                            <input type="text" class="form-control" placeholder="Enter part name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label>Company Name</label>
                            <input type="text" class="form-control" placeholder="Enter company name">
                        </div>
                        <div class="col">
                            <label>Due Date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Enter address">
                        </div>
                        <div class="col">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning">NEXT</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
