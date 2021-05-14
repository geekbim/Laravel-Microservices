<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function view($id)
    {
        return Product::find($id);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->only('title', 'image'));

        return response()->json([
            $product,
            Response::HTTP_CREATED
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->only('title', 'image'));

        return response()->json([
            $product,
            Response::HTTP_CREATED
        ]);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        
        return response()->json([
            null,
            Response::HTTP_NO_CONTENT
        ]);
    }
}
