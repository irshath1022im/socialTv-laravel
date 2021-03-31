<?php

use App\Post;
use App\Category;
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

    // $from = date('2021-01-01');
    // $to = date('2021-03-02');

    // $result =Category::with(['posts' => function($query) use($from,$to)
    // {
    //     return $query->whereBetween('created_at', [$from, $to]);
    // }])->get();
    // $result = Category::with(['subCategory' => function($query)
    // {
    //     return $query -> withCount('posts')->with('posts');
    // }])->get();
    //     return $result;

    return view('welcome');
})->name('home');

Route::get('/navigation',  function(){

    $category = Category::with(['subCategory' => function($query){
        return $query->get()->pluck('subCategory');
    }])->get();
    // return $category;
    return view('components.navbar', ['category'=>$category]);
});

Route::get('/recentPosts', function()
{
    $result = Post::orderByDesc('created_at')->take(5)->get();
    return $result;
});

Route::get('/postsByWeek', function () {


    // $result = Post::orderByDesc('created_at')->get();
    // return $result;
});

Route::get('/category/{categoryName}', function($categoryName)
{
    $from = date('2021-01-02');
    $to = date('2021-03-02');

    $news =Category::with(['posts' => function($query){
        return $query->where('created_at', '>', date('2021-03-01'));
    }])->where('category', '=', $categoryName)->get();

    $topNews = Category::with(['posts' => function($query) use($from,$to)
    {
        return $query->whereBetween('created_at', [$from, $to]);
    }])
    ->where('category', '=', $categoryName)->get();

    return view('category', ['news' => $news, 'topNews' => $topNews]);
});


Route::get('/subCategory/{category}', function ($category) {
    // return $category;
    // $result = SubCategory::with(['posts' => function($query){
    //         return $query->paginate(5);
    // }])
    //             ->where('id', $category)
    //             ->get()
    //             ;

    $result = Post::where('subCategoryId', $category)
            ->orderByDesc('created_at')
            ->paginate(5);

    // return $result;
    return view('subCategory', ['subCategoryPosts' => $result]);

})->name('subCategory');

Route::get('test/{id}', function ($id) {
    $result = Category::with(['posts' => function($query){
        return $query->orderByDesc('created_at')->take(3);
    }])
    ->where('id', $id)
    ->get();



    return $result;
});
