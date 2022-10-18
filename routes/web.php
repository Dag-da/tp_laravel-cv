<?php

use App\Models\Identity;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ExperienceController;


Route::get('/', function () {
  return view('pages.home');
});

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
  Route::get('/', function () {
    return view('pages.dashboard.index');
  })->name('dashboard');
  Route::resource('identity', IdentityController::class);
  Route::resource('experience', ExperienceController::class);
  Route::resource('formation', FormationController::class);
  Route::resource('skill', SkillController::class);
});

require __DIR__ . '/auth.php';
