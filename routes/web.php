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

Route::get('/', 'HomeController@index');

Auth::routes();
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Route::group(['middleware' => 'auth'], function () {

        Route::get('/dashboard', 'dashboardController@index');
        Route::get('/caleander', 'CaleanderController@getindex');
        Route::get('/map', 'MapController@index');
        Route::get('/map/location/create', 'MapController@cretaeLocation');
        Route::post('/map/location/create', 'MapController@storeLocation');
        Route::get('/map/location/view/{id}', 'MapController@viewLocation');

    });

Route::group(['prefix'=>'/manageuser', 'middleware'=>'auth'],function()
  {

    Route::get('/', 'Admincontroller@index');
    Route::get('/view/{id}', 'Admincontroller@getview');
    Route::get('/access/{id}', 'Admincontroller@getaccess');
    Route::get('/event/{id}', 'Admincontroller@getEventIndex');
    Route::get('/event/create/{id}', 'Admincontroller@getCreateEvent');
    Route::post('/event/create', 'Admincontroller@getstoreEvent');
    Route::get('/event/delete/{id}', 'Admincontroller@eventDelete');


  });
