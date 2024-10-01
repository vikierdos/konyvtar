<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\LibUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// GET
Route::get('/lib_users',[LibUserController::class, 'index']);
// paraméteres útvonal, no DOLLA SIGN
Route::get('/lib_user/{id}',[LibUserController::class, 'show']);

Route::get('/lendings',[LendingController::class, 'index']);
Route::get('/lending/{user_id}/{copy_id}/{start}',[LendingController::class, 'show']);
// BOOK
Route::get('/books',[BookController::class, 'index']);
Route::get('/book/{id}',[BookController::class, 'show']);

Route::get('/copies',[CopyController::class, 'index']);
Route::get('/copy/{id}',[CopyController::class, 'show']);

// POST
Route::post('/lib_user',[LibUserController::class, 'store']);

Route::post('/copy',[CopyController::class, 'store']);

Route::post('/book',[BookController::class, 'store']);

Route::post('/lending',[LendingController::class, 'store']);
//UPDATE
Route::put('/lib_user/{id}',[LibUserController::class, 'update']);

Route::put('/book/{id}',[BookController::class, 'update']);

Route::put('/copy/{id}',[CopyController::class, 'update']);
Route::put('/lending/{id}',[LendingController::class, 'update']);

//DELETE
Route::delete('/lib_user/{id}',[LibUserController::class, 'destroy']);

Route::delete('/book/{id}',[BookController::class, 'destroy']);

Route::delete('/copy/{id}',[CopyController::class, 'destroy']);

Route::delete('/lending/{id}',[LendingController::class, 'destroy']);