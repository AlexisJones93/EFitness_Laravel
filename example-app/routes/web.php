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
Route::get('/login', 'App\Http\Controllers\PagesController@login');

Route::resource('/clothes', 'App\Http\Controllers\PostController');

Route::get('/add-to-cart/{id}',[
'uses'=>'App\Http\Controllers\PostController@getAddToCart',
'as'=> 'product.addToCart']);

Route::get('/shopping-cart',[
    'uses'=>'App\Http\Controllers\PostController@getCart',
    'as'=> 'product.shoppingCart']);

        Route::get('/checkout',[
            'uses'=>'App\Http\Controllers\PostController@getCheckOut',
            'as'=> 'checkout']);

            Route::post('/checkout',[
                'uses'=>'App\Http\Controllers\PostController@postCheckOut',
                'as'=> 'checkout']);
    
Route::get('/clothes',[
    'uses'=>'App\Http\Controllers\PostController@index',
    'as'=> 'pages.clothes']);

    Route::get('/signup',[
        'uses'=>'App\Http\Controllers\UserController@getSignup',
        'as'=> 'users.signup']);

        Route::post('/signup',[
            'uses'=>'App\Http\Controllers\UserController@postSignup',
            'as'=> 'users.signup']);

            Route::get('/login',[
                'uses'=>'App\Http\Controllers\UserController@getLogin',
                'as'=> 'users.login']);
        
                Route::post('/login',[
                    'uses'=>'App\Http\Controllers\UserController@postLogin',
                    'as'=> 'users.login']);

                    Route::get('/users/profile',[
                        'uses'=>'App\Http\Controllers\UserController@getProfile',
                        'as'=> 'users.profile']);

                        Route::get('/users/logout',[
                            'uses'=>'App\Http\Controllers\UserController@getLogOut',
                            'as'=> 'users.logout']);