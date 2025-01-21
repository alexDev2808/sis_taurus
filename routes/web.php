<?php

use App\Http\Controllers\CarruselController;
use App\Http\Controllers\InyeccionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UploadController;
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

Route::get('/uploads', [UploadController::class, 'index'] )->middleware(['auth', 'verified'])->name('uploads.index');
Route::get('/uploads/create', [UploadController::class, 'create'] )->middleware(['auth', 'verified'])->name('uploads.create');
Route::get('/uploads/{upload}/edit', [UploadController::class, 'edit'] )->middleware(['auth', 'verified'])->name('uploads.edit');
Route::get('/uploads/show', [UploadController::class, 'show'] )->middleware(['auth', 'verified'])->name('uploads.show');

Route::get('/inyeccion', [InyeccionController::class, 'index'] )->middleware(['auth', 'verified'])->name('inyeccion.index');
Route::get('/inyeccion/create', [InyeccionController::class, 'create'] )->middleware(['auth', 'verified'])->name('inyeccion.create');
Route::get('/inyeccion/{inyeccion}/edit', [InyeccionController::class, 'edit'] )->middleware(['auth', 'verified'])->name('inyeccion.edit');
Route::get('/inyeccion/show', [InyeccionController::class, 'show'] )->middleware(['auth', 'verified'])->name('inyeccion.show');


// Slider
Route::get('/sliders', [SliderController::class, 'index'] )->middleware(['auth', 'verified'])->name('sliders.index');

// Carrusel
Route::get('/carrusel', [CarruselController::class, 'index'])->middleware(['auth', 'verified'])->name('carrusel.index');
Route::get('/carrusel/create', [CarruselController::class, 'create'])->middleware(['auth', 'verified'])->name('carrusel.create');
Route::get('/carrusel/{carrusel}/edit', [CarruselController::class, 'edit'])->middleware(['auth', 'verified'])->name('carrusel.edit');
Route::get('/carrusel/{carrusel}/show', [CarruselController::class, 'show'])->middleware(['auth', 'verified'])->name('carrusel.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
