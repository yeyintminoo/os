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

Route::get('/', 'BackendController@dashboard')->name('dashboard');
                 // uri
Route::resource('items','ItemController');
// rpute 7ခု ရ(get route - 4 ခု/post-1 ခု/put-1 ခု/delete-1 ခု ရ)
Route::resource('brands','BrandController');
