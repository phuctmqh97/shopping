<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
Route::prefix('danh-muc')->group(function (){
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('add', [CategoryController::class, 'addForm'])->name('category.add');
    Route::post('add', [CategoryController::class, 'saveForm']);
});

?>
