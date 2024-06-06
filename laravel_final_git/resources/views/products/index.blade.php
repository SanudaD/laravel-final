<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Get Product</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0c0c0e, #1c1c22);
      font-family: 'Montserrat', sans-serif;
      color: #fff;
    }

    .card {
      background: rgba(44, 44, 52, 0.8);
      backdrop-filter: blur(10px);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      border-radius: 10px;
      overflow: hidden;
    }

    .card-header {
      background: rgba(28, 28, 34, 0.8);
      font-weight: 700;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    .table {
      color: #fff;
      margin-bottom: 0;
    }

    .table th,
    .table td {
      border-color: rgba(255, 255, 255, 0.2);
    }

    .btn-primary {
      background-color: #8e44ad;
      border-color: #8e44ad;
      transition: background-color 0.3s ease;
      font-weight: 500;
    }

    .btn-primary:hover {
      background-color: #7d3a98;
      border-color: #7d3a98;
    }

    .btn-outline-info {
      color: #1e88e5;
      border-color: #1e88e5;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-info:hover {
      background-color: #1e88e5;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Products</h5>
        <a href="{{ route('products.add') }}" class="btn btn-primary">Add Product</a>
      </div>
      <div class="card-body p-0">
        <table class="table mb-0">
          <thead>
            <tr>
              <th scope="col">Code</th>
              <th scope="col">Product Name</th>
              <th scope="col">Price</th>
              <th scope="col">User Name</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <td>{{ $product->code }}</td>
              <td>{{ $product->product_name }}</td>
              <td>{{ $product->product_price }}</td>
              <td>{{ $product->user->name }}</td>
              <td>
                <div class="d-flex justify-content-around">
                  <a href="{{ route('products.edit', ['Productid' => $product->id]) }}" class="btn btn-outline-info btn-sm">Update</a>
                  <a href="{{ route('products.destroy', ['Productid' => $product->id]) }}" class="btn btn-outline-info btn-sm">Delete</a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

