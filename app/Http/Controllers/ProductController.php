<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function find()
    {
        $products = Product::all();
        $anchor = "listado";
        return view('products.products')->with(compact('products','anchor'));
    }

    public function detection()
    {
        $products = Product::all();
        $anchor = "deteccion";
        return view('products.products')->with(compact('products','anchor'));
    }

    public function extintion()
    {
        $products = Product::all();
        $anchor = "extincion";
        //return redirect()->to(route('products').'#extincion')->with(compact('products'));
        return view('products.products')->with(compact('products','anchor'));
    }
}
