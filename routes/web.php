<?php

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
Route::post('/postUpload','ProductImageController@uploads');
Route::get('sweetalert','ProductImageController@index');
Route::get('warning',function() {
	echo " Không có gì quí hơn độc lập tự do2";
});

Route::get('uploadImage',function() {
	return view('page.uploadImage');
});

Route::get('file/manager',function() {
	return view('page.file-manager');
});

Route::get('route/name/{id}/{name}','HomeController@route')->name('route');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
