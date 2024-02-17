<html>
    <head>
        <title>Manage Product</title>
    </head>
    <body>
        <h1>Add Product</h1>
        <form action="{{route('product.store')}}" method="POST">
            @csrf
            Product Name: <input type="text" name="product_name"><br>
            Brand: <input type="text" name="brand"><br>
            Color: <input type="text" name="color"><br>
            Price: <input type="text" name="price"><br>
            <button>Submit</button>
        </form>
    </body>
</html>