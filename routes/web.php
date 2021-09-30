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

/*Pages controller*/
Route::get('pages/welcome', 'PagesController@getIndex');
Route::get('pages/about', 'PagesController@getAbout');
Route::get('pages/contact', 'PagesController@getContact');

/*Post Controller*/
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('post/create', 'PostController@create')->name('post.create');
Route::post('post/create', 'PostController@store')->name('post.create');
Route::get('post/show/{id}', 'postController@show')->name('post.show');
Route::get('post/edit/{id}', 'postController@edit')->name('post.edit');
Route::post('post/edit/{id}', 'postController@update')->name('post.edit');
Route::get('post/delete/{id}', 'postController@delete')->name('post.delete');