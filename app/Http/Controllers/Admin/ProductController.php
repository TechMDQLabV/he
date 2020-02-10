<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    public function index()
    {
       // $products = Product::paginate(25);
        $products = Product::all();
    	return view('admin.products.index')->with(compact('products')); // listado
    } 
    public function create()
    {
        return view('admin.products.create'); 
    }
    public function store(Request $request)
    {
        $this->validate($request, Product::$rules, Product::$messages);

        $product = Product::create($request->only('name', 'description'));

        

        return redirect('/admin/products');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product')); // form de edición
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->fill($request->all());
        $product->save(); // UPDATE

        return redirect('/admin/products');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete(); // DELETE

        return back();
    }
}
