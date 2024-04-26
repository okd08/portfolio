<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/works/3', function () {
    return view('works.3');
})->name('works3');

Route::get('/works/6', function () {
    return view('works.6');
})->name('works6');
Route::get('/works/6/1', function () {
    return view('works.6-1');
})->name('works6-1');
Route::get('/works/6/2', function () {
    return view('works.6-2');
})->name('works6-2');
Route::get('/works/6/3', function () {
    return view('works.6-3');
})->name('works6-3');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
