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
    return view('home.index');
});

Route::get('/cv', function () {
    return view('home.cv');
});

Route::get('/stages/b1', function () {
    return view('stages.b1');
});

Route::get('/stages/b2', function () {
    return view('stages.b2');
});

Route::get('/veille_technologique', function () {
    return view('veilles.technologique');
});

Route::get('/veille_juridique', function () {
    return view('veilles.juridique');
});
Route::get('/bts', function () {
    return view('home.bts');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/twitter', function () {
    return view('home.twitter');
});
Route::get('twitterUserTimeLine', 'TwitterController@twitterUserTimeLine');
Route::post('tweet', ['as'=>'post.tweet','uses'=>'TwitterController@tweet']);