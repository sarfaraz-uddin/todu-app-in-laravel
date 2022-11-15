<?php

use App\Http\Controllers\todocontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::get('delete/{id}', [TodoController::class, 'delete']);
Route::get('edit/{id}', [TodoController::class, 'edit']);
Route::post('/edit', [TodoController::class, 'updateTodo'])->name('updateTodo');
Route::post('/save-todo', [TodoController::class, 'saveTodo'])->name('saveTodo');


