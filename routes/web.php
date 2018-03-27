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
use App\Kategory;


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/', 'pageController@index')->name('home');
Route::get('/home', 'pageController@index')->name('home');

Route::group(['prefix' =>'note'], function () {
    Route::get('{id}','noteController@url');//->where(['id'=>'[0-9]+']);
    Route::get('view/{id}','noteController@view');//->where(['id'=>'[0-9]+']);
    Route::get('add','noteController@add');
    Route::get('list','noteController@list');
    Route::Post('save','noteController@save');
    Route::get('del/{id}','noteController@delete')->where(['id'=>'[0-9]+']);
    Route::get('edit/{id}','noteController@edit')->where(['id'=>'[0-9]+']);
    Route::Post('editsave','noteController@editsave');
});

Route::group(['prefix' =>'kat'], function () {
    Route::get('view','kategoryController@view')->middleware(['auth','checkadmin']);
    Route::Post('save','kategoryController@save')->middleware(['auth','checkadmin']);
    Route::get('delete/{id}','kategoryController@delete')->where(['id'=>'[0-9]+'])->middleware(['auth','checkadmin']);

});
Route::group(['prefix' =>'ukat','middleware' => 'auth'], function () {
    Route::get('view','ukatController@view');
    Route::Post('save','ukatController@save');
    Route::get('delete/{id}','ukatController@delete')->where(['id'=>'[0-9]+']);

});

Route::group(['prefix' =>'crm','middleware' => 'auth'], function () {

    Route::get('addform','crmController@addform');
    Route::get('/','crmController@view');
    Route::get('{id}','crmController@date');
    Route::Post('save','crmController@save');
    Route::get('delete/{id}','crmController@delete')->where(['id'=>'[0-9]+']);
    Route::get('{id}','crmController@date');

});



Route::group(['prefix' =>'settings'], function () {
    Route::get('view','settingsController@view');
    Route::Post('save','settingsController@save');
    Route::get('delete/{id}','settingsController@delete')->where(['id'=>'[0-9]+']);

});

Route::group(['prefix' =>'page'], function () {
    Route::get('view/{id}','pageController@view')->where(['id'=>'[0-9]+']);
    Route::get('add','pageController@add')->middleware(['auth','checkadmin']);
    Route::Post('save','pageController@save')->middleware(['auth','checkadmin']);
    Route::get('del/{id}','pageController@del')->where(['id'=>'[0-9]+'])->middleware(['auth','checkadmin']);
    Route::get('edit/{id}','pageController@edit')->where(['id'=>'[0-9]+'])->middleware(['auth','checkadmin']);
    Route::get('list','pageController@list')->middleware(['auth','checkadmin']);
});


Route::group(['prefix' =>'file'], function () {
    Route::Post('save','fileController@save')->middleware(['auth','checkadmin']);
    Route::Post('update','fileController@update')->middleware(['auth','checkadmin']);
    Route::get('list','fileController@list')->name('list')->middleware(['auth','checkadmin']);
    Route::get('delete/{id}','fileController@delete')->where(['id'=>'[0-9]+'])->middleware(['auth','checkadmin']);
    Route::get('edit/{id}','fileController@edit')->where(['id'=>'[0-9]+'])->middleware(['auth','checkadmin']);
    Route::get('view/{id}','fileController@view')->where(['id'=>'[0-9]+']);
});

Route::group(['prefix' =>'gallery'], function () {
    Route::get('add','galleryController@add')->middleware(['auth','checkadmin']);
    Route::Post('save','galleryController@save')->middleware(['auth','checkadmin']);
    Route::Post('editsave','galleryController@editsave')->middleware(['auth','checkadmin']);
    Route::get('list','galleryController@list')->name('list')->middleware(['auth','checkadmin']);
    Route::get('delete/{id}','galleryController@delete')->where(['id'=>'[0-9]+'])->middleware(['auth','checkadmin']);
    Route::get('edit/{id}','galleryController@edit')->where(['id'=>'[0-9]+'])->middleware(['auth','checkadmin']);
    Route::get('view/{id}','galleryController@view')->where(['id'=>'[0-9]+']);
});



Route::get('/{kat}/{id}','noteController@url');

