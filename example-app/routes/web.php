<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/clothes', 'App\Http\Controllers\PagesController@clothes');

Route::resource('users', 'App\Http\Controllers\PostController');

Route::get('/add-to-cart/{id}',[
'uses'=>'App\Http\Controllers\PostController@getAddToCart',
'as'=> 'product.addToCart']);