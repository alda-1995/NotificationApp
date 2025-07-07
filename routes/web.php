<?php

use App\Http\Controllers\V1\GroupController;
use App\Http\Controllers\V1\GuestController;
use App\Http\Controllers\V1\NotificationController;
use App\Http\Controllers\V1\PlantillaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'dashboard.index')->name('dashboard');

Route::prefix('guests')->name('guests.')->group(function () {
    Route::get('/', [GuestController::class, 'index'])->name('index');
    Route::get('/create', [GuestController::class, 'create'])->name('create');
    Route::post('/', [GuestController::class, 'store'])->name('store');
    // Route::get('/{guest}/edit', [GuestController::class, 'edit'])->name('edit');
    // Route::put('/{guest}', [GuestController::class, 'update'])->name('update');
    // Route::delete('/{guest}', [GuestController::class, 'destroy'])->name('destroy');
});

Route::prefix('templates')->name('templates.')->group(function () {
    Route::get('/', [PlantillaController::class, 'index'])->name('index');
});

Route::prefix('notifications')->name('notifications.')->group(function () {
    Route::get('/', [NotificationController::class, 'index'])->name('index');
    Route::get('/create', [NotificationController::class, 'create'])->name('create');
    Route::post('/', [NotificationController::class, 'store'])->name('store');
});

Route::prefix('groups')->name('groups.')->group(function () {
    Route::get('/', [GroupController::class, 'index'])->name('index');
    Route::get('/create', [GroupController::class, 'create'])->name('create');
    Route::get('/{id}', [GroupController::class, 'show'])->name('show');
    Route::post('/', [GroupController::class, 'store'])->name('store');
    Route::delete('/{id}', [GroupController::class, 'destroy'])->name('destroy');
});