<?php

use App\Http\Controllers\BulkStatusUpdateController;
use App\Http\Controllers\BussinessAccountController;
use App\Http\Controllers\ChargeReportController;
use App\Http\Controllers\CommentReportController;
use App\Http\Controllers\DeManifestController;
use App\Http\Controllers\FormBookingsController;
use App\Http\Controllers\ManifestController;
use App\Http\Controllers\OrderProcessingController;
use App\Http\Controllers\OrderReportController;
use App\Http\Controllers\OrderStatusUpdateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ViewOrderAssignController;
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
    Route::get('bulk-status-update', [BulkStatusUpdateController::class, 'index'])->name('bulk_status_update');
    Route::get('order-status-update', [OrderStatusUpdateController::class, 'index'])->name('order_status_update');
    Route::get('view-order-assign', [ViewOrderAssignController::class, 'index'])->name('view_order_assign');
    Route::get('bussiness-account', [BussinessAccountController::class, 'index'])->name('bussiness_account');
    Route::get('charges-reports', [ChargeReportController::class, 'index'])->name('charges_reports');
    Route::get('order-reports', [OrderReportController::class, 'index'])->name('order_reports');
    Route::get('comments-reports', [CommentReportController::class, 'index'])->name('comments_reports');
    Route::get('setting', [SettingController::class, 'index'])->name('setting');
});
