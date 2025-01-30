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

Route::get('/', function () {
    return view('welcome');

    // Category routes
Route::middleware('auth:api')->group(function () {
    Route::post('category/store', 'CategoryController@store');
    Route::put('category/{id}/update', 'CategoryController@update');
    Route::delete('category/{id}/remove', 'CategoryController@remove');
    Route::get('category/{id}/show', 'CategoryController@show');
    Route::get('categories', 'CategoryController@all');
    Route::get('category/{keyword}/search', 'CategoryController@search');
});

// Article routes
Route::middleware('auth:api')->group(function () {
    Route::post('article/store', 'ArticleController@store');
    Route::put('article/{id}/update', 'ArticleController@update');
    Route::delete('article/{id}/remove', 'ArticleController@remove');
    Route::get('article/{id}/show', 'ArticleController@show');
    Route::get('articles', 'ArticleController@all');
    Route::get('article/{keyword}/search', 'ArticleController@search');
});

// Comment routes
Route::middleware('auth:api')->group(function () {
    Route::post('comment/store', 'CommentController@store');
    Route::put('comment/{id}/update', 'CommentController@update');
    Route::delete('comment/{id}/remove', 'CommentController@remove');
    Route::get('comment/{id}/show', 'CommentController@show');
    Route::get('comments', 'CommentController@all');
});

// Auth routes
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout')->middleware('auth:api');

});
