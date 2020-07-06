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
Route::post('/sign-in','HomeController@signIn')->name('sign_in');

Route::group(['middleware'=>['auth']],function (){
    Route::get('/dashboard','HomeController@dashboard');
    Route::post('/posts','PostController@createPost')->name('create_post');
    Route::get('/posts','PostController@posts')->name('all_posts');
    Route::post('/comments/{id}','PostController@saveComment')->name('save_comment');
});

