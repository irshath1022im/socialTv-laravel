<?php

namespace App\Http\Controllers;

use App\Post;
use livewire;
use Admin\AdsController;
use Admin\AdminPostController;
use Admin\AdminSubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Categories;
use App\Http\Controllers\PostController;

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
})->name('home');

Route::get('admin', function(){
    return view('/admin');
})->name('admin')->middleware('auth');

Route::get('/posts/{id}', [PostController::class, 'post'])->name('post');

Route::get('/adminCategory','Admin\CategoryController@index')->name('adminCategory')->middleware('auth');

Route::resource('/adminSubCategory', AdminSubCategoryController::class)->middleware('auth');
Route::resource('/adminPost', AdminPostController::class)->middleware('auth');
Route::resource('/adminAds', AdsController::class)->middleware('auth');


Route::get('/category/{id}', function ($id) {
    // return $id;
    return view('category');
});


Route::auth();

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::get('/subCategory/{category}', function ($category) {

    $result = Post::where('subCategoryId', $category)
            ->orderByDesc('created_at')
            ->paginate(5);

    // return $result;
    return view('subCategory', ['subCategoryPosts' => $result]);

})->name('subCategory');


Route::get('/test', function(){
    $result = Post::with(['subCategory' => function($query) {
        return $query->with('category')->get();
                    }])
               ->orderByDesc('created_at')
               ->paginate(10);

               return $result;
});

