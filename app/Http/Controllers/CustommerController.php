<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustommerController extends Controller
{
    public function index()
    {
        return view('blog/menuutama');
    }

    public function show($id)
    {
        $listscustommers = 'Daftar List Custommer' . $id;

        return view('blog/custommer', ['list' => $listscustommers]);
    }

    public function edit()
    {
        $customers=BD::('customer')->get()
    }

}
