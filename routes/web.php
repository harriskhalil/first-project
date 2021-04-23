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
});
Route::get('/roof', function () {
    return view('articles.index');
});
Route::get('/article', 'ArticleController@index')->name('article.index');
Route::get('/article/{article}','ArticleController@show');
Route::get('/test/{test}','PostController@view');
Route::get('/post/{posts}', 'PostController@show');
Route::get('/testing',function (){
    return view('');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

