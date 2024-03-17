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
    $users = DB::table('users')->get();


    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/compra', function () {
    return view('compra');
});

Route::get('/form', function () {
    return view('form');
});
