<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('homepage');
Route::get('about-us', [PagesController::class, 'about'])->name('about.us');
Route::get('services', [PagesController::class, 'services'])->name('services');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::get('advisory', [PagesController::class, 'advisory'])->name('advisory');
Route::get('training', [PagesController::class, 'training'])->name('training');
Route::get('consulting', [PagesController::class, 'consulting'])->name('consulting');
Route::get('aquaculture', [PagesController::class, 'aquaculture'])->name('aquaculture');
Route::get('aquaculture-accademy', [PagesController::class, 'aquacultureAccademy'])->name('aquaculture.accademy');
Route::get('projects', [PagesController::class, 'projects'])->name('projects');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('lattice')->group(function () {
    Route::get('programs', [AdminController::class, 'programs'])->name('admin.programs');
});
