<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MortgageController as AdminMortgageController;
use App\Http\Controllers\Public\MortgageController as PublicMortgageController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('admin')->group(function () {
    Route::apiResource('mortgages', AdminMortgageController::class);
});

Route::prefix('public')->group(function () {
    Route::get('mortgages', [PublicMortgageController::class, 'index']);
    Route::get('mortgages/{id}', [PublicMortgageController::class, 'show']);
});