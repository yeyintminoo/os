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
// Frontend

Route::get('/','FrontendController@home')->name('homepage');

Route::get('frontenditems','FrontendController@frontenditems')->name('frontenditems');

Route::get('frontenddetail/{id}','FrontendController@frontenddetail')->name('frontenddetail');

Route::get('frontendcheckout','FrontendController@frontendcheckout')->name('frontendcheckout');

Route::get('frontendregister','FrontendController@frontendregister')->name('frontendregister');

Route::get('frontendprofile','FrontendController@frontendprofile')->name('frontendprofile');

Route::get('frontendlogin','FrontendController@frontendlogin')->name('frontendlogin');






// Backend

Route::middleware('role:admin')->group(function(){

	
	
	Route::get('/dashboard', 'BackendController@dashboard')->name('dashboard');
                 // uri
	Route::resource('items','ItemController');
// route 7ခု ရ(get route - 4 ခု/post-1 ခု/put-1 ခု/delete-1 ခု ရ)
	Route::resource('brands','BrandController');

	Route::resource('categories','CategoryController');

	Route::resource('subcategories','SubcategoryController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/getitems','FrontendController@getItems')->name('getitems');

Route::resource('/orders','OrderController');
