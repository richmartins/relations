<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

use App\Http\Resource\ItemResource;
use App\Models\Item;

class ItemReferencesController extends Controller
{
    public function index(string $id_item): JsonResponse
    {
        $item = Item::findOrFail($id_item);

        return reponse()->json([
            "references" => ItemResource::collection($item->references)
        ]);
    }

    public function store(Request $request, string $id_item): JsonResponse
    {

        $item = Item::findOrFail($id_item);

        $this->validate($request, [
            "item_referenced_id" => "required"
        ]);

        $referencedItem = Item::find($request->item_referenced_id);

        $item->references()->attach($referencedItem->id);

        return response()->json(["item" => $item]);
    }

    public function update(Request $request, string $id_item): JsonResponse
    {

    }

    public function destroy(Request $request, string $id_item): Response
    {

    }
}
