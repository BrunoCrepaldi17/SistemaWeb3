<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class]);

Route::get('/series/', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('/series/criar', [SeriesController::class, 'store']);


Route::get('/categoria/criar', [categoriaController::class, 'create']);
Route::get('/categoria/', [categoriaController::class, 'index']);

Route::get('/teste/criar', [TesteController::class, 'create']);
Route::post('/teste/criar', [TesteController::class, 'store']);

Route::get('/teste/index', [TesteController::class, 'index']);
Route::get('/teste/{id}', [TesteController::class, 'destroy']);