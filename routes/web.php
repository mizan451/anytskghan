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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function() {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/{id}', 'AdminController@profile')->name('admin.profile');
});

Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){

    Route::get('dashboard', 'UserController@index')->name('user.dashboard');
    //Route::get('/{id}', 'UserController@profile')->name('user.profile');

    Route::get('changeStatus', 'UserController@changeStatus')->name('change.status');

});

Route::group(['prefix'=>'superAdmin','middleware'=>['superAdmin','auth'],'namespace'=>'superAdmin'],function(){
    Route::get('dashboard', 'superAdminController@index')->name('superAdmin.dashboard');
    Route::get('dashboard','superAdminController@getAllUser')->name('superAdmin.dashboard');
});
