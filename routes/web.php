<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PublicMortgageController;
use App\Http\Controllers\Web\MortgageController;

// Страницы для всех пользователей
Route::prefix('public')->group(function () {
    // Главная страница (список активных ипотек)
    Route::get('/mortgages', [PublicMortgageController::class, 'Index'])->name('home');
    // Детальная страница ипотеки
    Route::get('/mortgages/{id}', [PublicMortgageController::class, 'show'])->name('mortgages.show');
});

// Страницы администрирования
Route::prefix('admin')->group(function () {
    // Страницы просмотра списка ипотек
    Route::get('/mortgages', [MortgageController::class, 'adminIndex'])->name('admin.mortgages.index');
    // Страницы создание новой ипотеки
    Route::get('/mortgages/create', [MortgageController::class, 'create'])->name('admin.mortgages.create');
    // Страницы сохранение новой ипотеки:
    Route::post('/mortgages', [MortgageController::class, 'store'])->name('admin.mortgages.store');
    // Страницы формы редактирования ипотеки:
    Route::get('/mortgages/{id}/edit', [MortgageController::class, 'edit'])->name('admin.mortgages.edit');
    // Страницы обновления данных ипотеки
    Route::put('/mortgages/{id}', [MortgageController::class, 'update'])->name('admin.mortgages.update');
    // Страницы удаления ипотеки
    Route::delete('/mortgages/{id}', [MortgageController::class, 'destroy'])->name('admin.mortgages.destroy');
});
