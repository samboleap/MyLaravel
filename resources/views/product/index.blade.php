<html>
    <head>
        <title>Manage Product</title>
    </head>
    <body>
        <a href="{{route('product.create')}}">Add new</a>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            @foreach ($results as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->product_name}}</td>
                <td>{{$row->price}}</td>
                <td>
                    <a href="{{route('product.edit', $row->id)}}">Edit</a>
                    |
                    <a href="{{route('product.show', $row->id)}}">Show</a>
                    |
                    <form id="delete_form_{{ $row->id }}" action="{{route('product.destroy, $row->id')}}"
                    method="POST" style="display: none;">
                        @csrf
                        @method('delete')
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete_form_{{ $row->id }}').submit();">
                    Delete
                </a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>