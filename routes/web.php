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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'user','as'=>'user.', 'middleware'=>['auth']], function(){
    Route::get('dashboard','UserController@dashboard')->name('dashboard');
    Route::get('settings', 'UserController@settings')->name('settings');
    Route::post('update_password', 'UserController@update_password')->name('update_password');

    
    Route::resource('/', 'UserController');
    Route::resource('profile','ProfileController');
    Route::resource('product', 'ProductController');
    Route::resource('company', "CompanyController");
    Route::post('company/update_logo', 'CompanyController@update_logo')->name('company.update_logo');
});

Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware'=>['auth','admin']], function(){
    
    Route::resource('/', 'AdminController');
    Route::resource('clients', 'ClientController');
    Route::resource('category', 'CategoryController');
    Route::resource('products','Admin\ProductsController');
});

