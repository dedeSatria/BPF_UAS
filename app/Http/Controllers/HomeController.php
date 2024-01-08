<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $products = Products::all(); // Ambil data produk dari model Product
    return view('home.index', compact('products'));
}

}
