<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\ReturnController;




//admin dashboard
Route::get('dashboard',[HomeController::class, "index"])->name('admin-dashboard');

//return page
Route::get('return',[ReturnController::class, "index"])->name('return-page');
Route::post('return/reforder',[ReturnController::class, "reforder"])->name('reforder');
Route::get('item/{id}',[ReturnController::class, "ItemDetails"])->name('ItemDetails');
Route::post('return/order/store',[ReturnController::class, "store"])->name('return-store');
Route::get('grn',[ReturnController::class, "grn"]);
Route::post('return/order/confirm',[ReturnController::class, "storeconfirm"])->name('return-store-confirm');

//report page
Route::get('sales-reports',[ReportController::class, "salesindex"])->name('sales-report');
Route::post('sales-report/search',[ReportController::class, "salessearch"])->name('sales-reports-search');
Route::get('sales-item/view/{id}',[ReportController::class, "salesitem"]);
Route::get('grn-reports',[ReportController::class, "grnindex"])->name('grn-report');
Route::post('grn-report/search',[ReportController::class, "grnsearch"])->name('grn-reports-search');
Route::get('grn-item/view/{id}',[ReportController::class, "grnitem"]);
