<?php

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Routing\RouteAction;
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
Route::view('/about', 'frontend.pages.about');
Route::view('/contact', 'frontend.pages.contact');
Route::get('/product/{product}', 'ProductController@show');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

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
