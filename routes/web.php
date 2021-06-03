<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('contac', function () {
    return view('contact');
})->name('contact');

Route::get('creador', function () {
    return view('creador');
})->name('creador');

Route::get('conocenos', function () {
    return view('conocenos');
})->name('conocenos');
Route::get('contacto', [ContactoController::class, 'index'])->name('contacto');

Route::post('contactanos', [ContactoController::class , 'store'])->name('contacto.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

