<?php

use Illuminate\Http\Request;
use App\Category;
use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\Categories as CategoriesResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List Products
Route::get('products', 'API\ProductController@index');

Route::get('search', 'API\ProductController@search')->name('search');

Route::get('wallet/{id}', 'API\ProductController@wallet');

Route::get('orderhistory/{id}', 'API\ProductController@order_history');

// List single product
Route::get('product/{id}', 'API\ProductController@show');

//getting list of product under category
Route::get('category/{id}', 'API\ProductController@allProduct');

// get list of product under a category's subcategory
Route::get('category/subs/{sid}', 'API\ProductController@productSubCategory');
//getting list of category
Route::get('category',  function () {
    return new CategoriesResource(Category::all());
});

//authenticating user
Route::post('auth/login', 'Auth\ApiLoginController@login');

Route::group(['middleware' => ['api']], function () {
    Route::post('auth/register', 'Auth\ApiRegisterController@register');
});

Route::post("product/order","API\ProductController@order");

Route::get("product/order/{id}","API\ProductController@getOrder");

Route::get("user/{id}","API\ApiUserController@getUser");
Route::get("order/details/{id}","API\ProductController@orderDetails");

