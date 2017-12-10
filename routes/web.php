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

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {    
    Route::get('/dashboard', 'DashboardController@index')->name('admin.index');
    Route::resource('/habitaciones','RoomController', ['names' => [
        'index' => 'room.index',
        'store' => 'room.store',
        'destroy/{id}' => 'room.destroy',
    ]]);
    
    Route::resource('/habitaciones-alquiladas','RoomGuestController');
    
    Route::resource('/huesped','GuestController', ['names' => [
        'index' => 'guest.index',
        'store' => 'guest.store',
        'destroy/{id}' => 'guest.destroy',
        ]]);

    Route::get('/huesped-registrados','GuestController@getAll');

    Route::resource('/habitacion','RoomController', ['names' => [
        'index' => 'room.index',
        'store' => 'room.store',
        'destroy/{id}' => 'room.destroy',
        ]]);

    Route::resource('/alquiler','RentController', ['names' => [
        'index' => 'rent.index',
        'store' => 'rent.store',
        'destroy/{id}' => 'rent.destroy',
        ]]);
    
});

Auth::routes();

Route::get('/',function(){
    return redirect('admin/dashboard');
})->name('index.index');

