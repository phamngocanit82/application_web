<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\MainController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('', [MainController::class, 'index']);