<?php

use App\Models\Kodam;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KodamController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [KodamController::class, 'kodamcekstore'])->name('kodam.cek.store');

Route::get('/dashboard', function () {
    $kodams = Kodam::latest()->paginate(10);
    return view('dashboard', compact('kodams'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/dashboard', [KodamController::class, 'store'])->middleware('auth')->name('kodam.store');
Route::delete('/dashboard/{kodam}', [KodamController::class, 'destroy'])->middleware('auth')->name('kodam.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{name}', [KodamController::class, 'kodamHasil'])->name('hasil.kodam');
