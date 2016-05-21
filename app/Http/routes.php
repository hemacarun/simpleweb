<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   return view('users.login');
});

Route::post('auth/dologin', 'Auth\AuthController@dologin');
Route::get('user/logout',function(){
   Auth::logout();
   return redirect('/');
   });



Route::get('/gallery','GalleryController@index');

Route::get('gallery/list','GalleryController@viewgallerylist');
Route::post('gallery/save','GalleryController@savegallery');
Route::get('gallery/view/{id}','GalleryController@viewgallerypics');
Route::get('gallery/delete/{id}','GalleryController@deletegallery');
Route::post('image/upload','GalleryController@imageupload');
Route::get('/contact', 'ContactController@index');

//Route::auth();


