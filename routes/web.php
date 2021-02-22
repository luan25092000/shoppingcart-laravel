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
})->name('news-child');
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
Route::get('sign-up',['uses'=>'UserSignUp@create','middleware' => 'guest','as'=>'sign-up']);
Route::post('sign-up',['uses'=>'UserSignUp@store','middleware' => 'guest']);
Route::get('sign-in',['uses'=>'UserSignIn@create','middleware' => 'guest','as'=>'sign-in']);
Route::post('sign-in',['uses'=>'UserSignIn@store','middleware' => 'guest']);
Route::get('logout',['uses'=>'UserSignIn@getLogOut','middleware' => 'auth','as'=>'logout']);
Route::get('profile',['uses'=>'UserSignIn@getProfile','middleware' => 'auth','as'=>'user.profile']);
//Sign in with facebook
Route::get('login/facebook', 'UserSignIn@redirectToFacebook')->name('facebook.social.login');
Route::get('login/facebook/callback', 'UserSignIn@handleCallbackFacebook')->name('facebook.social.callback');
//Sign in with google
Route::get('login/google', 'UserSignIn@redirectToGoogle')->name('google.social.login');
Route::get('login/google/callback', 'UserSignIn@handleCallbackGoogle')->name('google.social.callback');
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
//Admin login
Route::group(['prefix'=>'admin'],function(){
	Route::get('dashboard',['uses'=>'DashboardController@index','as'=>'dashboard']);
	Route::group(['prefix'=>'orders'],function(){
        Route::get('list',['uses'=>'OrderController@index','as'=>'order.list']);
        
        Route::get('edit/{id}',['uses'=>'OrderController@edit','as'=>'order.edit.form']);

		Route::post('edit/{id}',['uses'=>'OrderController@update','as'=>'order.edit']);

        Route::get('add',['uses'=>'OrderController@addOrderForm','as'=>'order.add.form']);

        Route::post('add',['uses'=>'OrderController@store','as'=>'order.add']);
        
        Route::get('delete/{id}',['uses'=>'OrderController@destroy','as'=>'order.delete']);
	});
	Route::group(['prefix'=>'products'],function(){
        Route::get('list',['uses'=>'ProductController@index','as'=>'product.list']);
        
        Route::get('edit/{id}',['uses'=>'ProductController@edit','as'=>'product.edit.form']);

		Route::post('edit/{id}',['uses'=>'ProductController@update','as'=>'product.edit']);

        Route::get('add',['uses'=>'ProductController@addProductForm','as'=>'product.add.form']);

        Route::post('add',['uses'=>'ProductController@store','as'=>'product.add']);
        
        Route::get('delete/{id}',['uses'=>'ProductController@destroy','middleware' => ['role:admin|producer'],'as'=>'product.delete']);
    });
    Route::group(['prefix'=>'users'],function(){
        Route::get('list',['uses'=>'UserController@index','as'=>'user.list']);
        
        Route::get('edit/{id}',['uses'=>'UserController@edit','as'=>'user.edit.form']);

		Route::post('edit/{id}',['uses'=>'UserController@update','as'=>'user.edit']);

        Route::get('add',['uses'=>'UserController@addUserForm','as'=>'user.add.form']);
        
        Route::post('add',['uses'=>'UserController@store','as'=>'user.add']);

        Route::get('delete/{id}',['uses'=>'UserController@destroy','as'=>'user.delete']);
	});
});
// Roles
Route::get('role',['uses'=>'RoleController@index','as'=>'role.index']);