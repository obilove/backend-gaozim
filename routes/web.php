<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\WarehouseController;
use App\Http\Controllers\Admin\CarrierController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
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
    
    Route::get('/track', [OrderController::class, 'track'])
        ->name('orders.track');


         // Additional admin warehouses
    Route::get('/warehouses', [WarehouseController::class, 'index'])
        ->name('warehouses.index');

    Route::get('/warehouses/create', [WarehouseController::class, 'create'])
        ->name('warehouses.create');

    Route::post('/warehouses/store', [WarehouseController::class, 'store'])
        ->name('warehouses.store');

    Route::get('/warehouses/show/{id}', [WarehouseController::class, 'show'])
        ->name('warehouses.show');

    Route::get('/warehouses/edit/{id}', [WarehouseController::class, 'edit'])
        ->name('warehouses.edit');

    Route::put('/warehouses/update/{id}', [WarehouseController::class, 'update'])
        ->name('warehouses.update');

    Route::delete('/warehouses/delete/{id}', [WarehouseController::class, 'destroy'])
        ->name('warehouses.destroy');
    
    Route::get('/inventory/{id}', [WarehouseController::class, 'inventory'])
        ->name('warehouses.inventory');

    
         // Additional admin carriers
    Route::get('/carriers', [CarrierController::class, 'index'])
        ->name('carriers.index');

    Route::get('/carriers/create', [CarrierController::class, 'create'])
        ->name('carriers.create');

    Route::post('/carriers/store', [CarrierController::class, 'store'])
        ->name('carriers.store');

    Route::get('/carriers/show/{id}', [CarrierController::class, 'show'])
        ->name('carriers.show');

    Route::get('/carriers/edit/{id}', [CarrierController::class, 'edit'])
        ->name('carriers.edit');

    Route::put('/carriers/update/{id}', [CarrierController::class, 'update'])
        ->name('carriers.update');

    Route::delete('/carriers/delete/{id}', [CarrierController::class, 'destroy'])
        ->name('carriers.destroy');

        // Additional admin users

           Route::get('/users', [UserController::class, 'index'])
        ->name('users.index');

    Route::get('/users/create', [UserController::class, 'create'])
        ->name('users.create');

    Route::post('/users/store', [UserController::class, 'store'])
        ->name('users.store');

    Route::get('/users/show/{id}', [UserController::class, 'show'])
        ->name('users.show');

    Route::get('/users/edit/{id}', [UserController::class, 'edit'])
        ->name('users.edit');

    Route::put('/users/update/{id}', [UserController::class, 'update'])
        ->name('users.update');

    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])
        ->name('users.destroy');

        //permissions routes

         Route::get('/permissions', [PermissionController::class, 'index'])
        ->name('permissions.index');

    Route::get('/permissions/create', [PermissionController::class, 'create'])
        ->name('permissions.create');

    Route::post('/permissions/store', [PermissionController::class, 'store'])
        ->name('permissions.store');

    Route::get('/permissions/show/{id}', [PermissionController::class, 'show'])
        ->name('permissions.show');

    Route::get('/permissions/edit/{id}', [PermissionController::class, 'edit'])
        ->name('permissions.edit');

    Route::put('/permissions/update/{id}', [PermissionController::class, 'update'])
        ->name('permissions.update');

    Route::delete('/permissions/delete/{id}', [PermissionController::class, 'destroy'])
        ->name('permissions.destroy');

        //roles routes


        Route::get('/roles', [RoleController::class, 'index'])
        ->name('roles.index');

    Route::get('/roles/create', [RoleController::class, 'create'])
        ->name('roles.create');

    Route::post('/roles/store', [RoleController::class, 'store'])
        ->name('roles.store');

    Route::get('/roles/show/{id}', [RoleController::class, 'show'])
        ->name('roles.show');

    Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])
        ->name('roles.edit');

    Route::put('/roles/update/{id}', [RoleController::class, 'update'])
        ->name('roles.update');

    Route::delete('/roles/delete/{id}', [RoleController::class, 'destroy'])
        ->name('roles.destroy');

        
        });

    
