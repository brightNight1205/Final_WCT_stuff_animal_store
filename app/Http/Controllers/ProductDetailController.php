<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    // Display a listing of all product details
    public function index()
    {
        $productDetails = ProductDetail::all();
        return response()->json($productDetails);
    }

    // Store a newly created product detail
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'discount' => 'nullable|numeric',
            'cost' => 'required|numeric',
            'category_animal_id' => 'required|exists:category_animals,category_animal_id',
            'available_status_id' => 'required|exists:availables,available_id',
            'image' => 'required|string|max:255', // Adjust this if you want to upload an image file
        ]);

        $productDetail = ProductDetail::create($request->all());

        return response()->json($productDetail, 201);
    }

    // Display the specified product detail
 public function show($id)
{
    try {
        $productDetail = ProductDetail::findOrFail($id);
        return response()->json($productDetail);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}



    // Update the specified product detail
    public function update(Request $request, $id)
    {
        $productDetail = ProductDetail::find($id);

        if (!$productDetail) {
            return response()->json(['message' => 'ProductDetail not found'], 404);
        }

        // Validate input
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'discount' => 'nullable|numeric',
            'cost' => 'sometimes|required|numeric',
            'category_animal_id' => 'sometimes|required|exists:category_animals,category_animal_id',
            'available_status_id' => 'sometimes|required|exists:availables,available_id',
            'image' => 'sometimes|required|string|max:255',
        ]);

        $productDetail->update($request->all());

        return response()->json($productDetail);
    }

    // Remove the specified product detail
    public function destroy($id)
    {
        $productDetail = ProductDetail::find($id);

        if (!$productDetail) {
            return response()->json(['message' => 'ProductDetail not found'], 404);
        }

        $productDetail->delete();

        return response()->json(['message' => 'ProductDetail deleted successfully']);
    }
}
