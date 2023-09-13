<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/',[ProductController::class,'index']);
Route::get('/create',[ProductController::class,'create']);
Route::post('/store',[ProductController::class,'store']);
Route::get('/{id}/edit',[ProductController::class,'edit']);
Route::put('/{id}/update',[ProductController::class,'update']);
// Route::get('/{id}/delete',[ProductController::class,'destroy']);
Route::delete('/{id}/delete',[ProductController::class,'destroy']);
Route::get('/{id}/show',[ProductController::class,'show']);
