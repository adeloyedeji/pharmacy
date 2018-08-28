<?php

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

Route::get('/', 'HomeController@index')->name('index');


Route::get('about', 'HomeController@about')->name('about');
Route::get('news', 'HomeController@blog')->name('blog');
Route::get('/bakery','HomeController@bakery')->name('bakery');

Route::get("/dashboard/orders",'DashboardController@order');

///rating route
Route::post('reveiw/{id}', 'HomeController@storeReviewForProduct');

Route::get('/logout', 'HomeController@logout');

Route::get('services', 'HomeController@service')->name('services');

Route::get('contact', 'HomeController@contact')->name('contact');
Route::post('send-contact', 'HomeController@sendContact')->name('contact.send');

Route::get('blog/{slug}', 'HomeController@blogDetails')->name('blog.details');

Route::get('category/{category}', 'HomeController@singleCategory')->name('product.category');
Route::get('category/{category}/{subcategory}', 'HomeController@subCategory');
Route::get('product/{slug}', 'HomeController@singleProduct')->name('product.single');

Route::get('cart', 'CartController@cart')->name('cart');
Route::get('cart/add/{id}', 'CartController@addToCart')->name('cart.add');
Route::get('cart/delete/{id}', 'CartController@cartDelete')->name('cart.delete');

Route::get('search', 'HomeController@search')->name('search');

Route::get('cms', 'ProductController@adminIndex')->name('cms.index');

Route::resource('cms/product', 'ProductController', ['except' => [

    'delete'
]]);

Route::resource('cms/blog', 'BlogController', ['except' => [
    'delete'
]]);

Route::get('cms/product/{id}', 'ProductController@show');

Route::get('cms/product/delete/{id}', 'ProductController@destroy')->name('product.delete');

Route::get('cms/orders', 'OrderController@allOrders')->name('all.orders');
Route::get('cms/orders/details/{id}', 'OrderController@orderDetails')->name('order.details');
Route::get('cms/pending-orders', 'OrderController@pendingOrders')->name('pending.orders');
Route::get('cms/delivered-orders', 'OrderController@deliveredOrders')->name('delivered.orders');
Route::get('cms/prescriptions', 'ProductController@allPrescription')->name('prescription.all');

Route::get('cms/sub_categories/{category_id}', 'ProductController@getSubcategory')->name('subcategory');
Route::post('cms/process-order/{id}', 'OrderController@processOrder')->name('process.order');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('dashboard/wallet', 'DashboardController@wallet')->name('dashboard.wallet');
    Route::get('dashboard/profile', 'DashboardController@showProfile')->name('profile');
    Route::get('dashboard/order-details/{id}', 'DashboardController@orderDetails')->name('user.orderDetails');
    Route::resource('dashboard/prescription', 'PrescriptionController');

    Route::get('checkout', 'CartController@checkout')->name('checkout');


    Route::post('pay-with-wallet', 'PaymentController@payWithWallet')->name('checkout.wallet');
    Route::post('pay-on-pickup', 'PaymentController@payOnPickup')->name('pay.onPickup');

    Route::get('card-payment-callback', 'PaymentController@paymentCallBack')->name('payment.callback');
    Route::post('pay', 'PaymentController@redirectToGateway')->name('pay');

    Route::post('complete-profile', 'DashboardController@updateProfile')->name('profile.update');
    Route::post('change-password', 'DashboardController@changePassword')->name('change.password');

});

//admin route for our multi-auth system

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@login')->name('admin.login');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::post('/login', 'Auth\AdminLoginController@loginAdmin')->name('admin.login.submit');
});
