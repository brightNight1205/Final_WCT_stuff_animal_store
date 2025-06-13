<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlists = Wishlist::all();
        return response()->json($wishlists);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
             'product_detail_id' => 'required|integer',
        ]);

        $wishlist = Wishlist::create($request->all());

        return response()->json($wishlist, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $wishlist = Wishlist::find($id);

        if (!$wishlist) {
            return response()->json(['message' => 'Wishlist item not found'], 404);
        }

        return response()->json($wishlist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);

        if (!$wishlist) {
            return response()->json(['message' => 'Wishlist item not found'], 404);
        }

        $request->validate([
            'user_id' => 'sometimes|required|integer',
              'product_detail_id' => 'required|integer',
        ]);

        $wishlist->update($request->all());

        return response()->json($wishlist);
    }

//curl -X PUT "http://127.0.0.1:8000/api/wishlists/5" \ 
//-H "Content-Type: application/json" \
//-d '{"user_id": 2, "product_detail_id": 5}'

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wishlist = Wishlist::find($id);

        if (!$wishlist) {
            return response()->json(['message' => 'Wishlist item not found'], 404);
        }

        $wishlist->delete();

        return response()->json(['message' => 'Wishlist item deleted successfully']);
    }
}
