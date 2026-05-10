<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request.session()->invalidate();
    $request.session()->regenerateToken();
    return redirect('/');
})->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
