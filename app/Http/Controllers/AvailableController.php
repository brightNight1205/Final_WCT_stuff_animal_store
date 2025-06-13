<?php

namespace App\Http\Controllers;

use App\Models\Available;
use Illuminate\Http\Request;

class AvailableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Available::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $available = Available::create([
            'status' => $request->status,
        ]);

        return response()->json($available, 201);
    }

    /**
     * Display the specified resource.
     */
  public function show($id)
{
    try {
        $available = Available::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data' => $available
        ]);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Record not found'
        ], 404);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Server error',
            'details' => $e->getMessage()  // remove in production
        ], 500);
    }
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $available = Available::findOrFail($id);

        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $available->update([
            'status' => $request->status,
        ]);

        return response()->json($available);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $available = Available::findOrFail($id);
        $available->delete();

        return response()->json(null, 204);
    }
}
