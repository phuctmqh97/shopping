<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

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

            // Route::get('/', function () {
            //     return view('welcome');
            // });
Route::get('/', function () {
    return view('home');
});

Route::prefix('danh-muc')->group(function () {
    Route::get('/',[CategoryController::class, 'index'])->name('category.index');
    Route::get('/add',[CategoryController::class, 'add'])->name('category.add');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('xoa/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('edit/{id}', [CategoryController::class, 'save'])->name('category.save');
});

