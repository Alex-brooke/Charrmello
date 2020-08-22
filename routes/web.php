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
Route::resource('fauth','FirebaseAuthController');
Route::resource('profile','ProfileController');
Route::resource('media','MediaController');
Route::resource('contact','ContactController');

Route::get('/login','PageController@login');
Route::get('/register','PageController@register');
Route::get('/about','PageController@about');
Route::get('/premium','PageController@premium');
Route::get('/story-chiefs','PageController@storychiefs');
Route::get('/camp','PageController@camp');
Route::get('/camp/create','PageController@upload');
Route::get('/profile-update','PageController@profileupdate');
Route::get('/getMedia','PageController@getMedia');

Route::post('/media/update','MediaController@updateMedia');
Route::get('/media/delete/{id}','MediaController@deleteMedia');

Route::post('/user','FirebaseAuthController@login_user');
Route::get('/logout','FirebaseAuthController@logout_user');

//Route::get('login','FirebaseAuth@login');
