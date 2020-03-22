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
        $this->validate($request, Product::$messages);

        $product = Product::create($request->only('name', 'description'));



        return redirect('/admin/products');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product')); // form de edición
    }
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->update($request->all());
        return back();
    }
    public function destroy(Request $request)
    {
        try {
            //$product = Product::findOrFail($request->id)->get();
            Product::findOrFail($request->id)->delete();
            $notification = "El registro se eliminó correctamente";
        } catch (QueryException $exception){
            $notification = "Error al eliminar el registro".$exception->getMessage();
        }

        return back()->with(compact('notification'));
    }
}
