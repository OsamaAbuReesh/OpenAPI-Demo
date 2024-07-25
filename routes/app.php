<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * @OA\Post(
 *     path="/api/items",
 *     tags={"Items"},
 *     summary="Create a new item",
 *     description="Create a new item in the database",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="name",
 *                 type="string"
 *             ),
 *             @OA\Property(
 *                 property="description",
 *                 type="string"
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Item created",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="message",
 *                 type="string"
 *             ),
 *             @OA\Property(
 *                 property="data",
 *                 type="object"
 *             )
 *         )
 *     )
 * )
 */
Route::post('/items', function (Request $request) {
    return response()->json(['message' => 'Item created', 'data' => $request->all()]);
});
