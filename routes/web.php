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
