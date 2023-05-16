<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\Admin\UserController;
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
    return view('layouts.app');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('layouts.app');
    })->name('index');
});

Route::resource('/users', UserController::class);

Route::resource('/empleado', EmpleadoController::class);

Route::resource('/ticket', TicketController::class);

Route::resource('/tecnico', TecnicoController::class);