<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MessagesController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('saludo/{nombre}', [PagesController::class, 'greeting'])->where('nombre', '[A-Za-z]+')->name('saludos');

Route::get('contacto', [PagesController::class, 'contact'])->name('contacto');
Route::post('contacto', [PagesController::class, 'mensajes']);

Route::get('mensajes/create', [MessagesController::class, 'create'])->name('messages.create');
Route::post('mensajes', [MessagesController::class, 'store'])->name('messages.store');
Route::get('mensajes', [MessagesController::class, 'store'])->name('messages.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
