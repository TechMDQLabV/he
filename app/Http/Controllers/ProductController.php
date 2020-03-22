<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function find()
    {
        $products = Product::all();
        return redirect()->to(route('products').'#list')->with(compact('products'));
    }

    public function detection()
    {
        $products = Product::all();
        var_dump($products);
        //return redirect()->route('products',compact('products')).'#deteccion';
        return view('products')->with(compact('product')).'#deteccion'; // form de edición
    }

    public function extintion()
    {
        $products = Product::all();
        return redirect()->to(route('products').'#extincion')->with(compact('products'));
    }
}
