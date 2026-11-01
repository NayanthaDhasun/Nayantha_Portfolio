<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/contact', [PortfolioController::class, 'submitContact'])->name('portfolio.contact');
Route::get('/download-cv', [PortfolioController::class, 'downloadCv'])->name('portfolio.download-cv');

Route::get('/recommendations', [\App\Http\Controllers\RecommendationController::class, 'index'])->name('recommendations.index');
Route::post('/recommendations', [\App\Http\Controllers\RecommendationController::class, 'store'])
    ->middleware('throttle:portfolio-submissions')->name('recommendations.store');
