<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('author', [AuthorController::class, 'index']);
Route::get('author/detail/{id}', [AuthorController::class, 'detail']);
Route::get('author/add', [AuthorController::class, 'add']);
Route::post('author/add', [AuthorController::class, 'store']);
Route::get('author/edit/{id}', [AuthorController::class, 'edit']);
Route::put('author/edit/{id}', [AuthorController::class, 'update']);
Route::delete('author/delete/{id}', [AuthorController::class, 'delete']);
