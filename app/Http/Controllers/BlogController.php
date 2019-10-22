<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view ('blog/menuutama');
    }

    public function show($id)
    {
        $products = 'ini adalah product' . $id;
        return view('blog/product', ['products' => $products]);
    }
}
