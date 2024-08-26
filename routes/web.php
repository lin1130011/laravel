<?php

use App\Http\Controllers\CarController;

use App\Http\Controllers\DogController;
use App\Http\Controllers\HotelController;
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


Route::get('/', function () {
    return redirect()->route('cars.index');
});

Route::get('F1', [HotelController::class, 'F1'])->name('hotels.1f');
Route::get('F2', [HotelController::class, 'F2'])->name('hotels.2f');
Route::get('F3', [HotelController::class, 'F3'])->name('hotels.3f');

Route::resource('cars', CarController::class);
Route::resource('hotels', HotelController::class);
// Route::resource('dogs', DogController::class);
