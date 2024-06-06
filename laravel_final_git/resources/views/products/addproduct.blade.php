<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0f4c75, #3282b8);
            font-family: 'Montserrat', sans-serif;
            color: #fff;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: rgba(19, 66, 99, 0.8);
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .form-container label {
            font-weight: 600;
        }

        .form-control {
            border-radius: 0.25rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background-color: transparent;
            color: #fff;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #fff;
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
        }

        .btn-primary {
            background-color: #1e88e5;
            border-color: #1e88e5;
            transition: background-color 0.3s ease;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #1976d2;
            border-color: #1976d2;
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
    <h1>Create a Product</h1>
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
            <form method="post" action="{{ route('addproduct') }}">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" name="code" class="form-control" id="code" placeholder="Enter product code">
                </div>
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label for="product_price">Price</label>
                    <input type="text" name="product_price" class="form-control" id="product_price" placeholder="Enter product price">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save New Product</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
