<?php

use App\Http\Controllers\CarController;

use App\Http\Controllers\DogController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/cars_show', function () {
//     return view('car.index');
// })->name('cars_show');

// Route::get('/cars_create', function () {
//     return view('car.create');
// })->name('cars_create');

// Route::get('/cars_edit', function () {
//     return view('car.edit');
// })->name('cars_edit');

// Route::get('dog_excel', [DogController::class, 'excel']);
// Route::get('cars_excel', [CarController::class, 'excel'])->name('cars.excel');






Route::resource('cars', CarController::class);
// Route::resource('dogs', DogController::class);
