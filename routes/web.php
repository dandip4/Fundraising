<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\FeController;
use App\Http\Controllers\FundraiserController;
use App\Http\Controllers\FundraisingController;
use App\Http\Controllers\FundraisingPhaseController;
use App\Http\Controllers\FundraisingWithdrawalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [FeController::class, 'index'])->name('fe.index');

Route::get('/category/{category}', [FeController::class, 'category'])->name('fe.category');

Route::get('/details/{fundraising:slug}', [FeController::class, 'details'])->name('fe.details');

Route::get('/support/{fundraising:slug}', [FeController::class, 'support'])->name('fe.support');

Route::get('/checkout/{fundraising:slug}/{totalAmountDonation}', [FeController::class, 'checkout'])->name('fe.checkout');

Route::Post('/checkout/store/{fundraising:slug}/{totalAmountDonation}', [FeController::class, 'store'])->name('fe.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function() {


        Route::resource('categories', CategoryController::class)->middleware('role:owner');

        Route::resource('donaturs', DonaturController::class)->middleware('role:owner');

        Route::resource('fundraisers', FundraiserController::class)->middleware('role:owner')->except('index');

        Route::get('fundraisers', [FundraiserController::class, 'index'])->name('fundraisers.index');

        Route::resource('fundraising_withdrawals', FundraisingWithdrawalController::class)->middleware('role:owner|fundraiser');

        Route::post('fundraising_withdrawals/request/{fundraising}', [FundraisingWithdrawalController::class, 'store'])->middleware('role:fundraiser')->name('fundraising_withdrawals.store');

        Route::resource('fundraising_phase', FundraisingPhaseController::class)->middleware('role:owner|fundraiser');

        Route::post('fundraising_phase/update/{fundraising}', [FundraisingPhaseController::class, 'store'])->middleware('role:fundraiser')->name('fundraising_phase.store');

        Route::resource('fundraisings', FundraisingController::class)->middleware('role:owner|fundraiser');

        Route::post('/fundraisings/active/{fundraising}', [FundraisingController::class, 'active_fundraising'])->middleware('role:owner')->name('fundraising_withdrawals.active_fundraising');

        Route::post('/fundraiser/apply', [DashboardController::class, 'apply_fundraiser'])->name('fundraiser.apply');

        Route::get('/my-withdrawals', [DashboardController::class, 'my_withdrawals'])->name('my-withdrawals');

        Route::get('/my-withdrawals/details/{fundraisingWithdrawal}', [DashboardController::class, 'my_withdrawals_detail'])->name('my-withdrawals.detail');
    });
});

require __DIR__.'/auth.php';
