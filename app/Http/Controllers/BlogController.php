<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        return view ('blog/menuutama');
    }

    public function show($id)
    {
        $product = 'ini adalah product'. $id;
        $products = DB::table('product')->get();
        return view('blog/product', ['products' => $products, 'product' => $product]);
    }
}
