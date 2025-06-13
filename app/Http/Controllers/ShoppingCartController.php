<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    // List all shopping cart items
    public function index()
    {
        $carts = ShoppingCart::all();
        return response()->json($carts);
    }

    // Store a new cart item with required size
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'product_detail_id' => 'required|integer|exists:product_details,product_detail_id',
            'quantity' => 'required|integer|min:1',
            'size' => 'required|string|max:50',  // size is required here
        ]);

        $cart = ShoppingCart::create($request->all());

        return response()->json($cart, 201);
    }

    // Show a single cart item
  public function show($id)
{
    try {
        $cart = ShoppingCart::findOrFail($id);
        return response()->json($cart);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return response()->json(['message' => 'Shopping cart item not found'], 404);
    } catch (\Exception $e) {
        // Return error message for debugging (remove or comment out in production)
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


    // Update a cart item, size is required if provided
    public function update(Request $request, $id)
    {
        $cart = ShoppingCart::find($id);

        if (!$cart) {
            return response()->json(['message' => 'Cart item not found'], 404);
        }

        $request->validate([
            'user_id' => 'sometimes|required|integer|exists:users,id',
            'product_detail_id' => 'sometimes|required|integer|exists:product_details,product_detail_id',
            'quantity' => 'sometimes|required|integer|min:1',
            'size' => 'sometimes|required|string|max:50', // required if present
        ]);

        $cart->update($request->all());

        return response()->json($cart);
    }

    // Delete a cart item
    public function destroy($id)
    {
        $cart = ShoppingCart::find($id);

        if (!$cart) {
            return response()->json(['message' => 'Cart item not found'], 404);
        }

        $cart->delete();

        return response()->json(['message' => 'Cart item deleted successfully']);
    }
}
