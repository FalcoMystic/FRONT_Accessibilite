<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusculationController;
use App\Http\Controllers\CalisthenicsController;
use App\Http\Controllers\DietController;
use App\Http\Controllers\AccessibilityController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SitemapController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/musculation', [MusculationController::class, 'index'])->name('musculation.index');

Route::get('/calisthenics', [CalisthenicsController::class, 'index'])->name('calisthenics.index');

Route::get('/diet', [DietController::class, 'index'])->name('diet.index');

Route::get('/accessibilite', [AccessibilityController::class, 'index'])->name('accessibilite.index');
Route::get('/form', [FormController::class, 'index'])->name('form.index');

Route::get('/sitemap', [SitemapController::class, 'index'])->name('sitemap.index');
