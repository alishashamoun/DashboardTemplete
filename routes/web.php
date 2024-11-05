<?php

use App\Http\Controllers\DeManifestController;
use App\Http\Controllers\FormBookingsController;
use App\Http\Controllers\ManifestController;
use App\Http\Controllers\OrderProcessingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ViewOrderController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Manifest;

require __DIR__ . '/auth.php';
Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





// Admin routes
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::get('form-booking', [FormBookingsController::class, 'index'])->name('form_booking');
    Route::get('view-all-order', [ViewOrderController::class, 'index'])->name('view_all_order');
    Route::get('manifest', [ManifestController::class, 'index'])->name('manifest');
    Route::get('de-manifest', [DeManifestController::class, 'index'])->name('de_manifest');
    Route::get('order-processing', [OrderProcessingController::class, 'index'])->name('order_processing');
    Route::get('manifest', [ManifestController::class, 'index'])->name('manifest');
});
