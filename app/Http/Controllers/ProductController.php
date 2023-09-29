<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    // app/Http/Controllers/ProductController.php 
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

}
