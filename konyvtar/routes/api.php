<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LibUserController;
use App\Models\LibUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// GET
Route::get('/lib_users',[LibUserController::class, 'index']);
// paraméteres útvonal, no DOLLA SIGN
Route::get('/lib_user/{id}',[LibUserController::class, 'show']);

// BOOK
Route::get('/books',[BookController::class, 'index']);
Route::get('/book/{id}',[BookController::class, 'show']);

Route::get('/copies',[CopyController::class, 'index']);
Route::get('/copy/{id}',[CopyController::class, 'show']);

// POST
Route::post('/lib_user',[LibUserController::class, 'store']);

Route::post('/copy',[CopyController::class, 'store']);

Route::post('/book',[BookController::class, 'store']);

//UPDATE
Route::put('/lib_user/{id}',[LibUserController::class, 'update']);

Route::put('/book/{id}',[BookController::class, 'update']);

Route::put('/copy/{id}',[CopyController::class, 'update']);

//DELETE
Route::delete('/lib_user/{id}',[LibUserController::class, 'destroy']);

Route::delete('/book/{id}',[BookController::class, 'destroy']);

Route::delete('/copy/{id}',[CopyController::class, 'destroy']);