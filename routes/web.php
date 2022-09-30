<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Frontend part routes
Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class,'index']);
            //tutorial category path
Route::get('tutorial/{category_slug}',[App\Http\Controllers\Frontend\FrontendController::class,'viewCategoryPost']);

            //post view routes
Route::get('/tutorial/{category_slug}/{post_slug}',[App\Http\Controllers\Frontend\FrontendController::class,'viewPost']);



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //all categories routes
    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('add-category',[App\Http\Controllers\Admin\CategoryController::class,'store']);
    Route::get('edit-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::put('update-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'update']);
//    Route::get('delete-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class,'delete']); //only deletes category
    Route::post('delete-category',[App\Http\Controllers\Admin\CategoryController::class,'delete']); //delete with all posts

    //all posts routes
    Route::get('posts',[App\Http\Controllers\Admin\PostController::class,'index']);
    Route::get('add-post',[App\Http\Controllers\Admin\PostController::class,'create']);
    Route::post('add-post',[App\Http\Controllers\Admin\PostController::class,'store']);
    Route::get('edit-post/{post_id}',[App\Http\Controllers\Admin\PostController::class,'edit']);
    Route::put('update-post/{post_id}',[App\Http\Controllers\Admin\PostController::class,'update']);
    Route::get('delete-post/{post_id}',[App\Http\Controllers\Admin\PostController::class,'delete']);


    //all registered users
    Route::get('users',[App\Http\Controllers\Admin\UserController::class,'index']);
    Route::get('edit-user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'edit']);
    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'update']);
});
