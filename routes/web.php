<?php

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
// Redirect to each page
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('about',function(){
    return view('about');
})->name('about');
Route::get('products',function(){
    return view("products");
})->name('products');
Route::get('product',function(){
    return view("product");
})->name('product');
Route::get('product-detail',function(){
    return view("product-detail");
})->name('product-detail');
Route::get('concept',function(){
    return view("concept");
})->name('concept');
Route::get('dalat-concept',function(){
    return view("dalat-concept");
})->name('dalat-concept');
Route::get('design',function(){
    return view("design");
})->name('design');
Route::get('news',function(){
    return view("news");
})->name('news');
Route::get('news-child',function(){
    return view("news-child");
})->name('new-child');
Route::get('sales',function(){
    return view("sales");
})->name('sales');
Route::get('collection',function(){
    return view("collection");
})->name('collection');
Route::get('address',function(){
    return view("address");
})->name('address');
//User contact
Route::get('contact','UserContact@create');
Route::post('contact','UserContact@store');
//Sign in, sign up
Route::get('sign-up',['uses'=>'UserSignUp@create','middleware' => 'guest']);
Route::post('sign-up',['uses'=>'UserSignUp@store','middleware' => 'guest']);
Route::get('sign-in',['uses'=>'UserSignIn@create','middleware' => 'guest','as'=>'sign-in']);
Route::post('sign-in',['uses'=>'UserSignIn@store','middleware' => 'guest']);
Route::get('logout',['uses'=>'UserSignIn@getLogOut','middleware' => 'auth']);
Route::get('profile',['uses'=>'UserSignIn@getProfile','middleware' => 'auth','as'=>'user.profile']);
//Product
Route::get('product/product-table/{id}',['uses'=>'ProductController@show','as'=>'product.table']);
Route::post('product/product-table/{id}',['uses'=>'ProductController@addToCart','as'=>'add.to.cart']);
Route::get('cart',['uses'=>'ProductController@getCart','as'=>'cart']);
Route::get('checkout',['uses'=>'ProductController@getCheckout','as'=>'checkout']);
Route::get('pay',['uses'=>'ProductController@pay','as'=>'pay']);
Route::get('delete/{id}',['uses'=>'ProductController@deleteItem','as'=>'delete.order']);
Route::get('decrease/{id}',['uses'=>'ProductController@decreaseItem','as'=>'decrease.item']);
Route::get('increase/{id}',['uses'=>'ProductController@increaseItem','as'=>'increase.item']);
Route::get('search',['uses'=>'ProductController@searchProduct','as'=>'search']);
//Facebook login
Route::get('login/facebook',[App\Http\Controllers\SocialController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback',[App\Http\Controllers\SocialController::class,'handleFacebookCallback']);
//Google login
Route::get('login/google',[App\Http\Controllers\SocialController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[App\Http\Controllers\SocialController::class,'handleGoogleCallback']);
//Admin login
Route::get('admin',function(){
    return view("admin");
})->name('admin');