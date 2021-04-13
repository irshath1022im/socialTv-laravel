<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Admin\AdminCategoryController;
use Admin\AdminSubCategoryController;
use Admin\AdminPostController;
use CategoryController;
use App\SubCategory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

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
    return view('admin');
})->name('admin');

Route::resource('/adminCategory', AdminCategoryController::class);
Route::resource('/adminSubCategory', AdminSubCategoryController::class);
Route::resource('/adminPost', AdminPostController::class);




Route::get('/subCategory/{category}', function ($category) {

    $result = Post::where('subCategoryId', $category)
            ->orderByDesc('created_at')
            ->paginate(5);

    // return $result;
    return view('subCategory', ['subCategoryPosts' => $result]);

})->name('subCategory');


