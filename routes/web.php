
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\PackingListController;

// Quotation Routes
Route::resource('quotations', QuotationController::class);

// Booking Routes
Route::resource('bookings', BookingController::class);

// Spot Routes
Route::resource('spots', SpotController::class);

// Documentation Routes
Route::resource('documentations', DocumentationController::class);

// Packing List Routes
Route::resource('packinglists', PackingListController::class);

