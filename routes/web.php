<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function(){
	Route::get('/', [AdminController::class, 'index'])->name('dashboard.index');
	//Category
	Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
	Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
	Route::post('/categories/store', [CategoryController::class, 'store'])->name('category.store');
	Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
	Route::post('/categories/update', [CategoryController::class, 'update'])->name('category.update');
	Route::post('/categories/delete', [CategoryController::class, 'delete'])->name('category.delete');
	Route::post('/categories/restore', [CategoryController::class, 'restore'])->name('category.restore');

	//Product
	Route::get('/products', [ProductController::class, 'index'])->name('product.index');
	Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
	Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');
	Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
	Route::post('/products/update', [ProductController::class, 'update'])->name('product.update');
	Route::post('/products/delete', [ProductController::class, 'delete'])->name('product.delete');
	Route::post('/products/restore', [ProductController::class, 'restore'])->name('product.restore');
	Route::get('/products/{id}/show', [ProductController::class, 'show'])->name('product.show');

	//Category per product
	Route::get('/categories_product', [CategoryProductController::class, 'index'])->name('catpro.index');
	Route::get('/categories_product/create', [CategoryProductController::class, 'create'])->name('catpro.create');
	Route::post('/categories_product/store', [CategoryProductController::class, 'store'])->name('catpro.store');
	Route::get('/categories_product/{id}/edit', [CategoryProductController::class, 'edit'])->name('catpro.edit');
	Route::post('/categories_product/update', [CategoryProductController::class, 'update'])->name('catpro.update');
	Route::post('/categories_product/delete', [CategoryProductController::class, 'delete'])->name('catpro.delete');
	Route::post('/categories_product/restore', [CategoryProductController::class, 'restore'])->name('catpro.restore');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
