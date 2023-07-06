<?php

use Illuminate\Support\Facades\Route;
use Valpuia\Inspire\Controllers\InspirationController;

Route::get('quotes', [InspirationController::class, 'index']);
Route::get('quotes/{id}', [InspirationController::class, 'show']);
Route::get('quotes/random', [InspirationController::class, 'random']);
