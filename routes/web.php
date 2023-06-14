<?php
use App\Http\Controllers\Front\ProductController as FrontProduct;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Front Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/show-products/{id}', [FrontProduct::class, 'show'])->name('show_product');
Route::get('/search', [FrontProduct::class, 'search'])->name('search');


Route::prefix('admin')->group(function (){

});
Auth::routes();

// Admin Routes

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('admin.home');
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('/home/category/create',  [CategoryController::class, 'create'])->name('category.create');
    Route::post('/home/category/add',  [CategoryController::class, 'store'])->name('add_category');
    Route::get('/home/category/list',  [CategoryController::class, 'show'])->name('show_category');
    Route::get('/home/category/delete/{id}',  [CategoryController::class, 'destroy'])->name('delete_category');
    Route::get('/home/category/edit/{id}',  [CategoryController::class, 'edit'])->name('edit_category');
    Route::post('/home/category/update/{id}',  [CategoryController::class, 'update'])->name('update_category');

    Route::resource('products', ProductController::class);
    Route::get('products/delete/{id}',[ProductController::class,'destroy'])->name('delete_products');

    Route::resource('sliders', SliderController::class);
    Route::get('sliders/delete/{id}',[SliderController::class,'destroy'])->name('delete_sliders');

    Route::resource('posts', PostController::class);
    Route::get('posts/delete/{id}',[PostController::class,'destroy'])->name('delete_posts');
});






