<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;

// Import Admin SuratController
use App\Http\Controllers\Admin\SuratController as AdminSuratController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('visi-misi');
Route::get('/peta', [HomeController::class, 'peta'])->name('peta');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/potensi', [HomeController::class, 'potensi'])->name('potensi');

// Admin Routes (dengan middleware auth)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('village-histories', App\Http\Controllers\Admin\VillageHistoryController::class);
    Route::resource('vision-missions', App\Http\Controllers\Admin\VisionMissionController::class);
    Route::resource('village-maps', App\Http\Controllers\Admin\VillageMapController::class);
    Route::resource('village-structures', App\Http\Controllers\Admin\VillageStructureController::class);
    Route::resource('village-potentials', App\Http\Controllers\Admin\VillagePotentialController::class);

    // Rute untuk Manajemen Surat oleh Admin
    Route::get('/surat', [AdminSuratController::class, 'index'])->name('surat.index');
    Route::get('/surat/{surat}/edit', [AdminSuratController::class, 'edit'])->name('surat.edit');
    Route::put('/surat/{surat}', [AdminSuratController::class, 'update'])->name('surat.update');
});

// Routes untuk Layanan Surat (membutuhkan login)
Route::middleware(['auth'])->group(function () {
    Route::get('/surat', [SuratController::class, 'index'])->name('surat.index');
    Route::get('/surat/create', [SuratController::class, 'create'])->name('surat.create');
    Route::post('/surat', [SuratController::class, 'store'])->name('surat.store');
});


require __DIR__ . '/auth.php';
