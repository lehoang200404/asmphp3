<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\AuthController;

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



Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'postRegister'])->name('postRegister');


Route::group(['prefix' => 'admin', 'as' => 'admin.'],
function(){
    Route::group(['prefix' => 'products', 'as' => 'products.', 'middleware' => 'checkAdmin'],
    function(){
        Route::get('/', [ProductsController::class, 'listProduct'])->name('listProduct');

        Route::get('add-product', [ProductsController::class, 'addProduct'])->name('addProduct');

        Route::post('add-product', [ProductsController::class, 'addPostProduct'])->name('addPostProduct');

        Route::delete('delete-product/{product_id}', [ProductsController::class, 'deleteProduct'])->name('deleteProduct');

        Route::get('update-product/{product_id}', [ProductsController::class, 'updateProduct'])->name('updateProduct');

        Route::put('update-product/{product_id}', [ProductsController::class, 'updatePostProduct'])->name('updatePostProduct');
    });
});
