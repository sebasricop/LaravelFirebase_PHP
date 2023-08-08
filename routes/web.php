<?php

use App\Http\Controllers\Firebase\ContactController;

Route::get('contacts', [ContactController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
