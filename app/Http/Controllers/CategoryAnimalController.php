<?php

namespace App\Http\Controllers;

use App\Models\CategoryAnimal;
use Illuminate\Http\Request;

class CategoryAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoryAnimal::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:category_animals,name',
        ]);

        $categoryAnimal = CategoryAnimal::create($request->all());

        return response()->json($categoryAnimal, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $categoryAnimal = CategoryAnimal::findOrFail($id);
            return response()->json($categoryAnimal);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Category not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $categoryAnimal = CategoryAnimal::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255|unique:category_animals,name,' . $id . ',category_animal_id',
    ]);

    $categoryAnimal->update($request->only('name'));

    return response()->json([
        'status' => 'success',
        'message' => 'Category updated successfully.',
        'data' => $categoryAnimal
    ]);
}

//curl -X PUT http://127.0.0.1:8000/api/category-animals/6 \
//   -H "Authorization: Bearer 2|XrKoOw7gDtdYnPTbUDb6kgyfzIAl7KpFMhHS5NPn26912794" \
//   -H "Accept: application/json" \
//   -H "Content-Type: application/json" \
//   -d '{"name": "Updated Category Name"}'



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $categoryAnimal = CategoryAnimal::findOrFail($id);
    $categoryAnimal->delete();

    return response()->json([
        'status' => 'success',
        'message' => 'Category deleted successfully.'
    ], 200);
}

}
