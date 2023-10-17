<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(BarangController::class)->prefix('barang')->group(function () {
    Route::get('', 'index')->name('barangs');
    Route::get('create', 'create')->name('barangs.create');
    Route::post('store', 'store')->name('barangs.store');
    Route::get('show/{id}', 'show')->name('barangs.show');
    Route::get('edit/{id}', 'edit')->name('barangs.edit');
    Route::put('edit/{id}', 'update')->name('barangs.update');
    Route::delete('destroy/{id}', 'destroy')->name('barangs.destroy');
});