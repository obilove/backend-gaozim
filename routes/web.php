<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
 Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request.session()->regenerateToken();
    return redirect('/');
})->name('logout');
Route::middleware(['auth'])->prefix('super-admin')->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::middleware(['auth'])->prefix('super-admin')->name('admin.')->group(function () {

    Route::get('/vendors', [VendorController::class, 'index'])
        ->name('vendors.index');

    Route::get('/vendors/create', [VendorController::class, 'create'])
        ->name('vendors.create');

    Route::post('/vendors/store', [VendorController::class, 'store'])
        ->name('vendors.store');

    Route::get('/vendors/show/{id}', [VendorController::class, 'show'])
        ->name('vendors.show');

    Route::get('/vendors/edit/{id}', [VendorController::class, 'edit'])
        ->name('vendors.edit');

    Route::put('/vendors/update/{id}', [VendorController::class, 'update'])
        ->name('vendors.update');

    Route::delete('/vendors/delete/{id}', [VendorController::class, 'destroy'])
        ->name('vendors.destroy');


         // Additional admin orders
    Route::get('/orders', [OrderController::class, 'index'])
        ->name('orders.index');

    Route::get('/orders/create', [OrderController::class, 'create'])
        ->name('orders.create');

    Route::post('/orders/store', [OrderController::class, 'store'])
        ->name('orders.store');

    Route::get('/orders/show/{id}', [OrderController::class, 'show'])
        ->name('orders.show');

    Route::get('/orders/edit/{id}', [OrderController::class, 'edit'])
        ->name('orders.edit');

    Route::put('/orders/update/{id}', [OrderController::class, 'update'])
        ->name('orders.update');

    Route::delete('/orders/delete/{id}', [OrderController::class, 'destroy'])
        ->name('orders.destroy');
});


