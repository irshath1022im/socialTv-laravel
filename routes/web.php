<?php

namespace App\Http\Controllers;

use App\Post;
use Admin\AdminPostController;
use Admin\AdminCategoryController;
use Admin\AdminSubCategoryController;
use Admin\AdsController;
use App\SubCategory;
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
    return view('/admin');
})->name('admin')->middleware('auth');

Route::get('/posts/{id}', [PostController::class, 'post'])->name('post');

Route::resource('/adminCategory', AdminCategoryController::class)->middleware('auth');
Route::resource('/adminSubCategory', AdminSubCategoryController::class)->middleware('auth');
Route::resource('/adminPost', AdminPostController::class)->middleware('auth');
Route::resource('/adminAds', AdsController::class)->middleware('auth');


Route::get('/category/{id}', function ($id) {
    // return $id;
    return view('category');
});


Route::auth();


// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');


Route::get('/subCategory/{category}', function ($category) {

    $result = Post::where('subCategoryId', $category)
            ->orderByDesc('created_at')
            ->paginate(5);

    // return $result;
    return view('subCategory', ['subCategoryPosts' => $result]);

})->name('subCategory');


Route::get('/test', function(){
    return Post::with(['subCategory' => function($query) {
        return $query->with('category')->get();
    }])
                ->get()
                ->take(5);
});

