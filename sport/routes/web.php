<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusculationController;
use App\Http\Controllers\CalisthenicsController;
use App\Http\Controllers\DietController;
use App\Http\Controllers\SitemapController;

use Illuminate\Support\Facades\Route;

Route::get('/alert', [HomeController::class, 'index'])->name('home.index');
Route::get('/alert/{alert}', [HomeController::class, 'show'])->name('home.show');

Route::get('/alert', [MusculationController::class, 'index'])->name('musculation.index');
Route::get('/alert/{alert}', [MusculationController::class, 'show'])->name('musculation.show');

Route::get('/alert', [CalisthenicsController::class, 'index'])->name('calisthenics.index');
Route::get('/alert/{alert}', [CalisthenicsController::class, 'show'])->name('calisthenics.show');

Route::get('/alert', [DietController::class, 'index'])->name('diet.index');
Route::get('/alert/{alert}', [DietController::class, 'show'])->name('diet.show');

Route::get('/alert', [SitemapController::class, 'index'])->name('sitemap.index');
Route::get('/alert/{alert}', [SitemapController::class, 'show'])->name('sitemap.show');
