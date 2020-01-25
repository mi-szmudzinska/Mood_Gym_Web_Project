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


Auth::routes();

// Site
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@user_profile')->name('user');
Route::post('/profile/edit', 'HomeController@user_profile_edit')->name('user.edit');


Route::get('/products', 'HomeController@show_products')->name('products.index');
Route::get('/products/show/{id}', 'HomeController@show_product')->name('products.view');
Route::get('/orders', 'HomeController@show_orders')->name('orders.index');

Route::post('/orders/create', 'HomeController@order_create')->name('order.create');

// Admin panel
Route::group(['middleware' => 'admin','prefix' => 'admin'], function () {
    Route::get('/products', 'Admin\ProductController@index')->name('admin.products.index');
    Route::get('/products/edit/{id?}', 'Admin\ProductController@edit')->name('admin.products.edit');

    // Save data
    Route::post('/products/update/{id}', 'Admin\ProductController@update')->name('admin.products.update');

    Route::get('/products/delete/{id}', 'Admin\ProductController@delete')->name('admin.products.delete');


    Route::get('/categories', 'Admin\CategoryController@index')->name('admin.categories.index');
    Route::post('/categories/update', 'Admin\CategoryController@update')->name('admin.categories.update');


    Route::get('/orders', 'Admin\OrderController@index')->name('admin.orders.index');
    Route::get('/orders/status', 'Admin\OrderController@status_index')->name('admin.orders.status');
    Route::get('/orders/status/add', 'Admin\OrderController@add')->name('admin.orders.status.add');
});


