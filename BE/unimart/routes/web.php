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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware('auth')->group(function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::get('admin', 'DashboardController@index');
    //User
    Route::get('admin/user', 'AdminUserController@index');
    Route::get('admin/user/add', 'AdminUserController@add');
    Route::get('admin/user/edit/{id}', 'AdminUserController@edit');
    Route::post('admin/user/store', 'AdminUserController@store');
    Route::get('admin/user/delete/{id}', 'AdminUserController@delete')->name('user.delete');
    Route::get('admin/user/action', 'AdminUserController@action');

    //Product
    Route::get('admin/products', 'AdminProductController@index');
    Route::get('admin/product/add', 'AdminProductController@add');
    Route::post('admin/product/store', 'AdminProductController@store');

    //ProductCat
    Route::get('admin/product/cat/add', 'AdminProductCatController@add');
    Route::post('admin/product/cat/store', 'AdminProductCatController@store');
    Route::post('admin/product/cat/action/{id}', 'AdminProductCatController@action');
    Route::get('admin/product/cat', 'AdminProductCatController@index');
    Route::get('admin/product/cat/edit/{id}', 'AdminProductCatController@edit');
    Route::get('admin/product/cat/delete/{id}', 'AdminProductCatController@delete');
});
