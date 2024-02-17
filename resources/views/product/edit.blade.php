<html>
    <head>
        <title>Manage Product</title>
    </head>
    <body>
        <h1>Edit Product</h1>
        <form action="{{route('product.update', $product->id)}}" method="POST">
            @csrf
            @method('PUT')
            Product Name: <input type="text" name="product_name" value="{{$product->product->name}}"><br>
            Brand: <input type="text" name="brand" value="{{$product->brand}}"><br>
            Color: <input type="text" name="color" value="{{$product->color}}"><br>
            Price: <input type="text" name="price" value="{{$product->price}}"><br>
            <button>Submit</button>
        </form>
    </body>
</html>