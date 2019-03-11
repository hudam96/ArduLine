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


Route::get('admin/login','Admin\LoginController@showLoginForm')->name('login');
Route::get('admin/logout','Admin\LoginController@logout');
Route::post('admin/login','Admin\LoginController@Login');

Route::group(["middleware"=>"auth:admin"],function (){

    Route::get('/admin/dashboard',function (){
        return view('admin.dashboard.home')
            ;});
    Route::resource('/admin/dashboard/section', 'SectionController');
    Route::resource('/admin/dashboard/product','ProductController');


});
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/store', 'HomeController@showStore');
Route::get('/products', 'HomeController@getAllProducts');
Route::get('/sections/{id}' ,'HomeController@showSection');
Route::get('/cart/{id}','HomeController@addToCart');
Route::get('/shopping-cart','HomeController@showCart');
Route::get('/checkout','HomeController@checkout');


