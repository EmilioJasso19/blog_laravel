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
})->name('home');

Route::get('/saludos/{nombre}', function ($nombre) {

    $consolas = [
        'Xbox',
        'PlayStation',
        'Wii U',
        'Ste Ijue Pta'
    ];
   return view('saludos', compact('nombre', 'consolas'));
})->where('nombre', '[A-Za-z]+')->name('saludo');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
