<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/home");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/house', function () {
    return view("houses.index");
})->name("house.index");

