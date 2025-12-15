<?php

use App\Http\Controllers\participantsController;
use App\Http\Controllers\santacodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/code', function () {
    return view('code');
});
Route::post('santacode/verify', [santacodeController::class, 'checkCode'])->name('santa.verify');




Route::middleware(['santa.access'])->group(function () {
    Route::get('/monitoring', [participantsController::class, 'index'])->name('monitoring');
});

 Route::get('/entercode', [santacodeController::class, 'index'])->name('santa.show');


Route::post('/create', [participantsController::class, 'create'])->name('part.create');
Route::get('createEntry', function () {
    return view('welcome');
})->name('createEntry');
