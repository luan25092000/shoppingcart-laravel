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
});
Route::get('products',function(){
    return view("products");
})->name('products');
Route::get('product',function(){
    return view("product");
});
Route::get('product-detail',function(){
    return view("product-detail");
});
Route::get('concept',function(){
    return view("concept");
});
Route::get('dalat-concept',function(){
    return view("dalat-concept");
});
Route::get('design',function(){
    return view("design");
});
Route::get('news',function(){
    return view("news");
});
Route::get('news-child',function(){
    return view("news-child");
});
Route::get('sales',function(){
    return view("sales");
});
Route::get('collection',function(){
    return view("collection");
});
Route::get('cart',function(){
    return view("cart");
});
Route::get('address',function(){
    return view("address");
})->name('address');
Route::get('contact','UserContact@create');
Route::post('contact','UserContact@store');
Route::get('sign-up',['uses'=>'UserSignUp@create','middleware' => 'guest']);
Route::post('sign-up',['uses'=>'UserSignUp@store','middleware' => 'guest']);
Route::get('sign-in',['uses'=>'UserSignIn@create','middleware' => 'guest']);
Route::post('sign-in',['uses'=>'UserSignIn@store','middleware' => 'guest']);
Route::get('logout',['uses'=>'UserSignIn@getLogOut','middleware' => 'auth']);
Route::get('profile',['uses'=>'UserSignIn@getProfile','middleware' => 'auth','as'=>'user.profile']);
Route::get('product-table/{id}',['uses'=>'ProductController@show','as'=>'product.table']);
Route::post('product-table/{id}',['uses'=>'ProductController@addToCart','as'=>'add.to.cart']);
Route::get('cart',['uses'=>'ProductController@getCart','as'=>'cart']);
Route::get('checkout',['uses'=>'ProductController@getCheckout','as'=>'checkout']);
Route::get('delete/{id}',['uses'=>'ProductController@deleteItem','as'=>'delete.order']);
Route::get('getinfo-facebook/{social}',['uses'=>'SocialController@getInfo','as'=>'getinfo.facebook']);
Route::get('checkinfo-facebook/{social}',['uses'=>'SocialController@checkInfo','as'=>'checkinfo.facebook']);
Route::get('search',['uses'=>'ProductController@searchProduct','as'=>'search']);