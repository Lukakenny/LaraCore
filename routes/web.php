<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\UserPostsController;
use App\Http\Middleware\checkAdminOrUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth',checkAdminOrUser::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('admin', [DashboardController::class,'index'])->name('admin');
    Route::resource('posts', PostController::class)->names([
        'index' => 'posts.index',
        'show' => 'posts.show',
        'destroy' => 'posts.destroy',
    ]);
    Route::resource('categories', CategoryController::class)->names([
        'index' => 'categories.index',
        'store' => 'categories.store',
    ]);
});
 Route::middleware('auth')->group(function () {
     Route::get('/feed/myPosts', [UserPostsController::class,'myPosts'])->name('user.myPosts');

     Route::resource('feed', UserPostsController::class)->names([
         'index' => 'user.index',
         'store' => 'user.store',
         'destroy' => 'user.destroy',
         'edit' => 'user.edit',
         'update' => 'user.update',
     ]);
 });





require __DIR__.'/auth.php';
