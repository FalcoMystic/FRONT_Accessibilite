<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusculationController;

Route::get('/musculation', [MusculationController::class, 'index']);