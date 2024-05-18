<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Get Product</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
</head> 
<body>

<div class = "add_product">
    <a href="{{ route('products.add') }}" class="btn btn-primary">Add Product</a>  
</div>

<table class="table">
  <thead>
    <tr>
    <th scope="col">Code</th>
      <th scope="col">Product name</th>
      <th scope="col">Price</th>
      <th scope="col">User name</th>

      
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
            <tr>
                <td>{{ $product->code }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->user->name}}</td>
                <td>  <div><a href="{{route('products.edit',['Productid'=> $product->id])}}"
                    class="btn btn-outline-info">Update</a></div>
        </td>
        <td>  <div><a href="{{route('products.destroy',['Productid'=> $product->id])}}"
                    class="btn btn-outline-info">Delete</a></div>
        </td>
            </tr>
            @endforeach
            
   
  </tbody>

</table>
</div>
</body>

</html>

