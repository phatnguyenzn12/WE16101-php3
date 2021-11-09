<?php
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
});

Route::resource("users", UserController::class);

?>