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
use App\TheLoai;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'category'], function () {

        Route::get('list','categoryController@getList');

        Route::get('edit/{id}','categoryController@getEdit');
        Route::post('edit/{id}','categoryController@postEdit');

        Route::get('add','categoryController@getAdd');
        Route::post('add','categoryController@postAdd');

        Route::get('delete/{id}','categoryController@getDelete');

        
    });
    Route::group(['prefix' => 'news'], function () {
        
        Route::get('list','newsController@getList');
        Route::get('edit','newsController@getEdit');
        Route::get('add','newsController@getAdd');
        
    });
    Route::group(['prefix' => 'newstype'], function () {
        
        Route::get('list','newstypeController@getList');
        Route::get('edit','newstypeController@getEdit');
        Route::get('add','newstypeController@getAdd');
        
    });
    Route::group(['prefix' => 'slide'], function () {
        
        Route::get('list','slideController@getList');
        Route::get('edit','slideController@getEdit');
        Route::get('add','slideController@getAdd');
        
    });
    Route::group(['prefix' => 'user'], function () {
        
        Route::get('list','userController@getList');
        Route::get('edit','userController@getEdit');
        Route::get('add','userController@getAdd');
        
    });


});