<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('hotel');
});


Route::get('/f1', function () {
    return view('f1');
})->name('f1name');

Route::get('/f2', function () {
    return view('f2');
})->name('f2name');

Route::get('/f3', function () {
    return view('f3');
})->name('f3name');


Route::get('/cars', function () {
    return view('car.index');
})->name('cars');

Route::get('/cars_create', function () {
    return view('car.create');
})->name('cars_create');

Route::get('/cars_edit', function () {
    return view('car.edit');
})->name('cars_edit');



Route::get('/students', function () {
    return view('student.index');
})->name('students');

Route::get('/students_create', function () {
    return view('student.create');
})->name('students_create');

Route::get('/students_edit', function () {
    return view('student.edit');
})->name('students_edit');


Route::get('/test/{aa}/{bb}', function (int $num1, int $num2) {
    $sum = $num1 + $num2;
    // $text = "數字1=>$num1 數字2$num2 加總為:$sum";
    $data = [
        'num1' => $num1,
        'num2' => $num2,
        'sum' => $sum,
    ];
    return view('test', ['watch' => $data]);
})->name('test');
