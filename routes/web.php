<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontEnd\WebController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', [WebController::class,'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'admin'])->get('administrator', [HomeController::class, 'index'])->name('administrator');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    //product management
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products', [ProductController::class, 'store'])->name('products.store');

    //category management
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/web', [WebController::class, 'index'])->name('web');
});

Route::get('new_order', [HomeController::class, 'new_order'])->name('new_order');
Route::get('pending_order', [HomeController::class, 'pending_order'])->name('pending_order');
Route::get('shipping_order', [HomeController::class, 'shipping_order'])->name('shipping_order');
Route::get('order_done', [HomeController::class, 'order_done'])->name('order_done');
Route::get('userdetail', [HomeController::class, 'userdetail'])->name('userdetail');
Route::get('point_of_sale', [HomeController::class, 'point_of_sale'])->name('point_of_sale');