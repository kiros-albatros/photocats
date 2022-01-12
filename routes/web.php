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

Route::get('/cars', 'CarsController@getInfo');

Route::get('/all', 'GalleryController@showPhotos')->name('allPhotos');

//Route::get('/test/{arg}','GalleryController@say');
Route::get('/test','GalleryController@show');
Route::get('/onePic/{id}', 'GalleryController@one')->middleware('checkForCats:id');
Route::post('/formview','GalleryController@showFormData')->name('imageUpload');
Route::post('/onePic/editItem/{id}','GalleryController@rewriteItem')->name('imageChange');
Route::get('/onePic/editItem/{id}','GalleryController@editItem')->middleware('auth');
Route::get('/onePic/deleteItem/{id}','GalleryController@deleteItem')->middleware('auth');

Route::post('/all/{id}', 'CommentsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
