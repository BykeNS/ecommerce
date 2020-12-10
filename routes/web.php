<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ProductController@index');
Route::get('/about', 'ProductController@about');
Route::get('/contact', 'ProductController@contact');
Route::get('/product/{product}', 'ProductController@show');
Route::get('/product/category/{product}','ProductController@catFind');
Route::get('/search', 'ProductController@search')->name('search');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::view('/mail', 'email.customer');

Route::prefix('/admin')->namespace('Admin')->group(function () {
    Route::group(['middleware' => ['is_admin']], function () {
        Route::get('/dashboard', 'AdminController@index');
        Route::get('/product/create', 'AdminController@create');
        Route::get('/product/{product}', 'AdminController@show');
        Route::post('/product/store', 'AdminController@store')->name('product.store');
        Route::post('/product/update/{product}', 'AdminController@update');
        Route::get('/product/edit/{product}', 'AdminController@edit');
        Route::get('/product/delete/{product}', 'AdminController@destroy');
        // Category
        Route::get('/category/', 'CategoryController@index');
        Route::get('/category/create', 'CategoryController@create');
        Route::post('/category/store', 'CategoryController@store');
        //Users
        Route::get('/users', 'AdminController@user');

    });

});

Route::post('cart', [
    'as' => 'cart.add',
    'uses' => 'ProductController@add',
]);

Route::get('destroy', [
    'as' => 'destroy',
    'uses' => 'ProductController@destroy',
]);

Route::get('cart', [
    'as' => 'cart',
    'uses' => 'ProductController@cart',
]);

Route::get('remove-cart/{rowid}', [
    'as' => 'remove-cart',
    'uses' => 'ProductController@remove',
]);

Route::post('cart/update/{rowId}', [
    'as' => 'cart.update',
    'uses' => 'ProductController@update',
]);

Route::post('/charge', 'ProductController@charge')->name('charge');
