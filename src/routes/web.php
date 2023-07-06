<?php

use Illuminate\Support\Facades\Route;
use Valpuia\Inspire\Controllers\InspirationController;

Route::get('quote', [InspirationController::class, 'quote']);
Route::get('random', [InspirationController::class, 'random']);
