<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; //$_GET['...'], $_post['...']
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $results = Product::all(); //select * from products
        return view('product.index', compact('results'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $product = new Product;
        $product->product_name = $request['product_name'];
        $product->brand = $request['brand'];
        $product->color = $request['color'];
        $product->price = $request['price'];
        $product->save();// INSERT INTO ...

        return redirect()->route('product.index');

    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');

    }

    public function update(Request $request, $id){
        $prodict = Product::find($id);
        $prodict->product_name = $request['product_name'];
        $prodict->brand = $request['brand'];
        $prodict->color = $request['color'];
        $prodict->price = $request['price'];
        $prodict->save(); //INSERT INTO ....

        return redirect()->route('product.index');

    }

    public function edit($id){
        $product = Product::find($id); //SELECT * FROM products WHERE id = '$editId'
        return view('product.edit', compact('product'));

    }

    public function show($id){

        $product = Product::find($id);
        return view('product.show', compact('product'));
    }
}