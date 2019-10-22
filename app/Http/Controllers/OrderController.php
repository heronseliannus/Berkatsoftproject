<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        return view('dasboard/home');
    }
    public function show($id)
    {
        $orders = 'List Order ini adalah'. $id;

        $salesorders = DB::table('order')->get();

        return view('blog/salesorder', ['orders' => $orders, 'salesorders' => $salesorders]);
    }
}
