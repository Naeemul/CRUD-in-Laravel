<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manageBlog');
Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('addBlog');
Route::post('/add-blog-complete', [BlogController::class, 'addBlogComplete'])->name('addBlogComplete');
Route::get('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('deleteBlog');
Route::get('/update-blog/{id}', [BlogController::class, 'updateBlog'])->name('updateBlog');
Route::post('/update-blog-complete/{id}', [BlogController::class, 'updateBlogComplete'])->name('updateBlogComplete');
