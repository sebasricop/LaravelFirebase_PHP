<?php

use App\Http\Controllers\Firebase\ContactController;
//use Illuminate\Routing\Route;

Route::get('contacts', [ContactController::class, 'index']);
Route::get('add-contact', [ContactController::class, 'create']);
Route::post('add-contact', [ContactController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
