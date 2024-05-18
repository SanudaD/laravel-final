<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit a Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('products.update',['Productid' => $product->id])}}">
        @csrf 
        @method('post')
        <div>
            <label>Edit Code</label>
            <input type="text" name="code" value="{{ $product->code }}" placeholder="code" />
        </div>
        <div>
            <label>Edit Product name</label>
            <input type="text" name="product_name" value="{{ $product->product_name }}" placeholder="product_name" />
        </div>
        <div>
            <label>Edit Price</label>
            <input type="text" name="product_price" value="{{ $product->product_price }}" placeholder="product_price" />
        </div>
        <div>
            <input type="submit" value="Save a New Product" class="btn btn-primary"/>
        </div>
    </form>
</body>
</html>