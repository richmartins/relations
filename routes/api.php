<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemReferencesController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('v1')->group(function () {
        Route::resource('items', ItemController::class)->except(['create', 'edit']);
        Route::resource('categories', CategoryController::class)->except(['create', 'edit']);

        Route::prefix('item/{id}/')->group(function () {
            Route::get('references', [ItemReferencesController::class => 'index']);
            Route::post('references', [ItemReferencesController::class => 'store']);
            Route::put('references', [ItemReferencesController::class => 'update']);
            Route::delete('references', [ItemReferencesController::class => 'destroy']);
        });
    });
});
