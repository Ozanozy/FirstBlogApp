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


Route::get('/' , 'makaleController@getIndex');
Auth::routes();
Route::get('home' , 'HomeController@index')->name('home');
Route::get('makale-olustur' , 'makaleController@makale_olustur');
Route::post('makale-gonder' , 'makaleController@makale_gonder');
Route::get('makale/{id}' , 'makaleController@makaleDetay');
Route::get('all-makale' , 'makaleController@makale_all' );
Route::get("post" ,   'makaleController@postview');
Route::get("makale-duzenle/{id}" ,  'makaleController@makaleDuzenle');
Route::post("/makale-duzenle/{id}" , 'makaleController@makaleGuncelle');
Route::get("/yorum-olustur" , 'commentController@yorumOlustur');
Route::post("/yorumgonder"  , 'commentController@yorumgonder');
Route::get("comment_post{id}" , 'makaleController@comment_all');
Route::get("image-upload-demo" , 'ImageController@index');
Route::post("image-upload-demo" , 'ImageController@upload');
        //burası url           //controller adı , // fonksiyonun adı.