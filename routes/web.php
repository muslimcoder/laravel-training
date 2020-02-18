<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|cle
*/

Route::get('/', function () {
    return view('layout.bootstrap');
});
//user Route
Route::get('/home','HomeController@index')->name('halaman-utama');
Route::get('/home/detail/{id}','HomeController@show');
Route::get('/home/create','HomeController@create');
Route::post('/home','HomeController@store');
Route::get('/home/edit/{id}','HomeController@edit')->name('edit.btn');
Route::put('/home/{id}','HomeController@update');
Route::delete('/delete/{id}','HomeController@destroy')->name('delete.btn');

//blog route
Route::group(['prefix' => 'blog'], function () {
    Route::get('/blog','BlogController@index')->name('halaman-blog');
    Route::get('/blog/create','BlogController@create')->name('create-blog');
    Route::get('/blog/{id}','BlogController@show')->name('detail-blog');
    Route::post('/blog','Blogcontroller@store')->name('store-blog');
    Route::get('/blog/edit/{id}','Blogcontroller@edit')->name('edit-blog');
    Route::put('/blog/{id}','Blogcontroller@update')->name('update-blog');
    Route::delete('/blog/{id}','BlogController@destroy')->name('delete-blog');

});
