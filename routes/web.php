<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas CRUD para o recurso Post
Route::resource('posts', PostController::class);


