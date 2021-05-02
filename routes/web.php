<?php

namespace App\Http\Controllers;

use App\Post;
use livewire;
use Facebook\Facebook;
use Admin\AdsController;
use Admin\AdminPostController;
use Meta;
use Admin\AdminSubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Categories;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\PostController;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Exceptions\FacebookResponseException;

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
    // $result = Post::with(['subCategory' => function($query) {
    //     return $query->with('category')->get();
    //                 }])
    //            ->orderByDesc('created_at')
    //            ->paginate(10);


    $fb = new \Facebook\Facebook([
        'app_id' => '1174068929708878',           //Replace {your-app-id} with your app ID
        'app_secret' => '0c136187524fd5e2c35f5087d9669021',   //Replace {your-app-secret} with your app secret
        'graph_api_version' => 'v10.0',
      ]);


    //   try {

    //   // Get your UserNode object, replace {access-token} with your token
    //     $response = $fb->get('/100534564952329?fields=posts{full_picture, created_time,message}', 'EAAQrzzlZCQ04BAOhwfWRs3soxzzGPYN3JRGAVyT6R9Dch6ffV8HLIW5k3JQ67HZBwGAk5pidnmZCozY84RZA0lM5vlIUzcXdaIBUp0zyHZAnNWFLRB9uJ50EXLcutGZC7MjcYw0DuRkKuLnTZBTZBrv1PADZBIZAVbrZBhUtYaOVRZCij6q9Ys9mSE54WpUxQHbwDlc6Av0p1bKWPgZDZD');

    //   } catch(\Facebook\Exceptions\FacebookResponseException $e) {
    //           // Returns Graph API errors when they occur
    //     echo 'Graph returned an error: ' . $e->getMessage();
    //     exit;
    //   } catch(\Facebook\Exceptions\FacebookSDKException $e) {
    //           // Returns SDK errors when validation fails or other local issues
    //     echo 'Facebook SDK returned an error: ' . $e->getMessage();
    //     exit;
    //   }


    // //   dd($response->getGraphUser());
    // $result = $response->getGraphUser();

    try {
        // Returns a `FacebookFacebookResponse` object
        $response = $fb->get('/100534564952329?fields=posts{full_picture, created_time,message}', 'EAAQrzzlZCQ04BADZAY1JT9iOoYPebVMZCfWso980HUzCCWB3GXRpEWPwLbhFC43arh5u1ZBp0dDZADC673qLomIsHUAxGKjH82It0RZB0iHTkZA0WvvRe3ZBhU25Oa1JRRUi7cr0CJsCtK0FrTw4eBpFtmdC6g9fRUkA0doGEVT1OeYqSGFqrZCjysZCxixOhPQTDK9fw2Tr4qZCwZDZD');

      } catch(\Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(\Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }
      $graphNode = $response->getGraphNode();
      $result = $graphNode->get_object('posts');

      dump($result);
        // dump($graphNode->getContent('full_picture'));

    //   dump( $full_picture = $graphNode['full_picture']);

    //   $dataCollection->each(function($item,$key){
    //       dump( $item);
    //   });
    //   dump($dataCollection);
    //   return view('facebook', ['data' => $graphNode]);
});

Route::get('metaTest', function () {

    Meta::set('title', 'You are at home');
    Meta::set('description', 'This is my home. Enjoy!');
    Meta::set('image', asset('images/home-logo.png'));

    return view('metaTest');
});
