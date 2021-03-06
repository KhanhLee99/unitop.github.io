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

// Route::get('admin/{age}', function(){
//     return view('admin');
// })->middleware('CheckAge');

// Route::get('admin/index/{age}', 'AdminController@index');
// Route::get('admin/show/{age}', 'AdminController@show');

// Route::get('admin/dashboard', 'AdminController@dashboard')->middleware('auth');
Route::middleware('auth')->group(function(){
    //Danh sách các Route sử dụng middleware('auth')
    Route::get('admin/dashboard', 'AdminController@dashboard');

});
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
