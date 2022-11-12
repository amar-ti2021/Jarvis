<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PustakawanController;
use App\Models\Book;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pustakawan', [PustakawanController::class, 'index']);
Route::get('/pustakawan/{id}', [PustakawanController::class, 'show']);
Route::post('/pustakawan', [PustakawanController::class, 'store']);
Route::put('/pustakawan/{id}', [PustakawanController::class, 'update']);


Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::put('/books/{id}', [BookController::class, 'update']);
