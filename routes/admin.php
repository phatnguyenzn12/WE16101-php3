<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('danh-muc', function(){
    return "danh sach danh muc san pham";
});
Route::prefix('san-pham')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    // localhost:8000/admin/san-pham/remove/12
    Route::get('remove/{id}', [ProductController::class, 'remove'])
    ->name('product.remove');

    Route::get('chi-tiet/{id}', [ProductController::class, 'detail']);

    Route::get('add', [ProductController::class, 'addForm'])->name('product.add');
    Route::post('add', [ProductController::class, 'saveAdd']);

    Route::get('edit/{id}', [ProductController::class, 'editForm'])->name('product.edit');
    Route::post('edit/{id}', [ProductController::class, 'saveEdit']);

});

Route::prefix('danh-muc')->group(function(){
    Route::get('/{id}', [CategoryController::class, 'detail'])->name('cate.detail');
});

Route::resource("users", UserController::class);

?>