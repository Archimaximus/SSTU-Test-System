<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/tests', function () {
    return view('tests');
});

Route::get('/preview', function () {
    return view('preview');
});

Route::get('/attestation', function () {
    return view('attestation');
});

Route::get('/welcome', function () {
    return view('welcome');
});
