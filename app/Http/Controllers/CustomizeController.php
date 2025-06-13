<?php

namespace App\Http\Controllers;

use App\Models\Customize;
use Illuminate\Http\Request;

class CustomizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Customize::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customize_product' => 'required|string|max:255|unique:customizes,customize_product',
        ]);

        $customize = Customize::create($request->all());

        return response()->json($customize, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $customize = Customize::findOrFail($id);
        return response()->json($customize);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customize = Customize::findOrFail($id);

        $request->validate([
            'customize_product' => 'required|string|max:255|unique:customizes,customize_product,' . $customize->customize_id . ',customize_id',
        ]);

        $customize->update($request->all());

        return response()->json($customize);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customize = Customize::findOrFail($id);
        $customize->delete();

        return response()->json(null, 204);
    }
}
