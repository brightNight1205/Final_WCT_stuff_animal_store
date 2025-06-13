<?php

namespace App\Http\Controllers;

use App\Models\ProductSingle;
use Illuminate\Http\Request;

class ProductSingleController extends Controller
{
    // List all product singles
    public function index()
    {
        $products = ProductSingle::all();
        return response()->json($products);
    }

    // Store a new product single
    public function store(Request $request)
    {
        $request->validate([
            'product_detail_id' => 'required|exists:product_details,product_detail_id',
            'description' => 'required|string',
            'size' => 'required|string|max:50',
            'quantity' => 'required|integer|min:0',
            'color' => 'required|string|max:50',
            'customize_id' => 'required|exists:customizes,customize_id',
        ]);

        $productSingle = ProductSingle::create($request->all());

        return response()->json($productSingle, 201);
    }

    // Show a product single by id
    public function show($id)
    {
        $productSingle = ProductSingle::find($id);

        if (!$productSingle) {
            return response()->json(['message' => 'ProductSingle not found'], 404);
        }

        return response()->json($productSingle);
    }

    // Update a product single by id
    public function update(Request $request, $id)
    {
        $productSingle = ProductSingle::find($id);

        if (!$productSingle) {
            return response()->json(['message' => 'ProductSingle not found'], 404);
        }

        $request->validate([
            'product_detail_id' => 'sometimes|required|exists:product_details,product_detail_id',
            'description' => 'sometimes|required|string',
            'size' => 'sometimes|required|string|max:50',
            'quantity' => 'sometimes|required|integer|min:0',
            'color' => 'sometimes|required|string|max:50',
            'customize_id' => 'sometimes|required|exists:customizes,customize_id',
        ]);

        $productSingle->update($request->all());

        return response()->json($productSingle);
    }

    // Delete a product single by id
    public function destroy($id)
    {
        $productSingle = ProductSingle::find($id);

        if (!$productSingle) {
            return response()->json(['message' => 'ProductSingle not found'], 404);
        }

        $productSingle->delete();

        return response()->json(['message' => 'ProductSingle deleted successfully']);
    }
}
