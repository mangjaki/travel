<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuteController;

Route::get('/', function () {
    return view('layout.main');
});

Route::resource('rute', RuteController::class);
