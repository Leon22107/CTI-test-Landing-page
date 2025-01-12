<?php
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');
