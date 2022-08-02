<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }

    public function create(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json(['message' => 'product created successfully', 'product' => $product]);
    }

    public function update(Product $product, Request $request){

        $product->update($request->all());
        return response()->json(['message' => 'product updated successfully', 'product' => $product]);

    }
}
