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
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Hello, welcome!';
});

Route::get('/hello-controller', [App\Http\Controllers\HelloController::class, 'index']);


Route::get('/countdown', function () {
    return view('countdown');
});

Route::get('/match', function () {
    return view('match');
});
