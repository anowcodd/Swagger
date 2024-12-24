<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/**
 * @OA\Info(
 *     title="API Documentation",
 *     version="1.0.0",
 *     description="Dokumentasi API untuk proyek Anda."
 * )
 */


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
