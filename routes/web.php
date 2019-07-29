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
    return view('auths.login');
});
//midlleware admin
Route::group(['middleware' => ['auth','checkRole:admin']], function () {
    Route::resource('kategori', 'KategoriController');
    Route::resource('doctor', 'DoctorController');
    Route::resource('produk', 'ProdukController');
    
});
//midlleware admin dan doctor
Route::group(['middleware' => ['auth','checkRole:admin,doctor']], function () {
    //dashboard
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('customer', 'CustomerController');
});
//midlleware doctor
Route::group(['middleware' => ['auth','checkRole:doctor']], function () {
    Route::get('messages', 'DashboardController@messages');
    
});



//login$logut
Route::get('/login','AuthController@login');
Route::get('/register','AuthController@register');
Route::post('/postregister','AuthController@postregister');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');