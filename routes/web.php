<?php

use App\Models\Short;
use App\Http\Requests\ShortRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShortController;
use App\Http\Middleware\EnsureUserIsLoggedIn;

Route::get('/', function () {
    return view('index');
});

Route::get('/shortener/login', [AuthController::class, 'loginForm'])->name('shortener.login');
Route::post('/shortener/login', [AuthController::class, 'login'])->name('shortener.loginreq');
Route::get('/shortener/logout', [AuthController::class, 'logout'])->name('shortener.logout');

Route::middleware(EnsureUserIsLoggedIn::class)->group(function () {
    Route::get('/shortener', [ShortController::class, 'index'])->name('shortener.index');
    Route::get('/shortener/trashed', [ShortController::class, 'indexTrashed'] )->name('shortener.trashed');
    Route::get('/shortener/create', [ShortController::class, 'create'])->name('shortener.create');
    Route::get('/shortener/{short:uuid}', [ShortController::class, 'show'])->name('shortener.show')->withTrashed();
    Route::get('/shortener/{short:uuid}/edit', [ShortController::class, 'edit'])->name('shortener.edit');

    Route::post('/shortener-create', [ShortController::class, 'store'])->name('shortener.store');
    Route::put('/shortener-update/{short:uuid}', [ShortController::class, 'update'])->name('shortener.update');
    Route::delete('/shortener-delete/{short:uuid}', [ShortController::class, 'destroy'])->name('shortener.destroy');
    Route::post('/shortener-restore/{short:uuid}', [ShortController::class, 'restore'])->name('shortener.restore')->withTrashed();
});


Route::get('/url/{short:short_url}', [ShortController::class, 'redirect'])->name('url.redirect');