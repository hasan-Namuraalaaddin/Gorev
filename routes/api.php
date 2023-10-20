<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books',[BookController::class,'index']);
Route::get('/book/{book}', [BookController::class,'show']);
Route::post('/book', [BookController::class,'store']);
Route::put('/book/{book}', [BookController::class,'update']);
Route::delete('/book/{id}',[BookController::class,'destroy']);