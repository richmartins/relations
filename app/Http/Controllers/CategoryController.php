<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Resources\CategoryResource;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json([
            "categories" => CategoryResource::collection(Category::all()),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $this->validate($request, [
            "name" => "required",
        ]);
        
        $new_cat = Category::create($request->all());

        return response()->json(["category" => new CategoryResource($new_cat)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cat = Category::findOrFail($id);

        return response()->json(["category" => new CategoryResource($cat)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $cat = Category::findOrFail($id);

        $this->validate($request, [
            "name" => "required",
        ]);

        $cat->update($request->all());
        
        return response()->json(["category" => new CategoryResource($cat)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        $cat = Category::findOrFail($id);

        $cat->delete();
        
        return response("delete succesfull");
    }
}
