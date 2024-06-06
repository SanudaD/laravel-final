<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit a Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .form-container label {
            font-weight: 600;
        }

        .form-control {
            border-radius: 0.25rem;
            border: 1px solid rgba(255, 255, 255, 0.5);
            background-color: transparent;
            color: #fff;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #fff;
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .error-list {
            list-style: none;
            padding: 0;
        }

        .error-list li {
            color: #ff6b6b;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Edit a Product</h1>
    <div class="container">
        <div class="form-container">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="error-list">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('products.update', ['Productid' => $product->id]) }}">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="code">Edit Code</label>
                    <input type="text" name="code" value="{{ $product->code }}" class="form-control" id="code" placeholder="code">
                </div>
                <div class="form-group">
                    <label for="product_name">Edit Product Name</label>
                    <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" id="product_name" placeholder="product_name">
                </div>
                <div class="form-group">
                    <label for="product_price">Edit Price</label>
                    <input type="text" name="product_price" value="{{ $product->product_price }}" class="form-control" id="product_price" placeholder="product_price">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save Product</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
