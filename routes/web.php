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
Route::get('/test/{tests}', function ($post) {
    $posts=['my-first-post'=>'this is my first post',
            'my-second-post'=>'this is my second post'
            ];
    return view('post',[
        'post'=>$posts[$post]
    ]);
});
