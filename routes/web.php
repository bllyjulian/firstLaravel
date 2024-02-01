<?php

use App\Http\Controllers\DataController; // Tambahkan ini untuk mengimpor DataController

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bil');
});

Route::get('/test1', function () {
    return view('test1');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/fatur', function () {
    return view('fatur');
});
Route::get('/form', function () {
    return view('form');
});

Route::post('/hasil', [DataController::class, 'postData']);
// Contoh route menggunakan metode GET
Route::get('/data', [DataController::class, 'getData']);

// Contoh route menggunakan metode POST
Route::post('/data', [DataController::class, 'postData']);

// Contoh route menggunakan metode PUT
Route::put('/data/{id}', [DataController::class, 'putData']);
