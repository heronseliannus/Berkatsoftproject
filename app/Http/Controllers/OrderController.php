<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('blog/menuutama');
    }
    public function show($id)
    {
        $orders = 'List Order ini adalah'. $id;
        return view('blog/salesorder', ['orders' => $orders]);
    }
}
