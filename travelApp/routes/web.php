<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\SopirController;

Route::get('/', function () {
    return view('layout.main');
});

Route::resource('rute', RuteController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('sopir', SopirController::class);
