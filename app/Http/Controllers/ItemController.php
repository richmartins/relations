<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

use App\Models\Item;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(["items" => ItemResource::collection(Item::all())]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "category_id" => "required",
        ]);

        $new_item = Item::create($request->all());

        return response()->json(["item" => $new_item]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        return response()->json(["item" => new ItemResource(Item::findOrFail($id))]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $item = Item::findOrFail($id);
        $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "category_id" => "required",
        ]);

        $item->update($request->all());

        return response()->json(["item" => $item]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        $item = Item::findOrFail($id);

        $item->delete();

        return reponse("delete successfull");
    }
}
