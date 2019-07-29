<?php
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/doctor','ApiDoctorController@getdoctor');

//Produk
Route::get('/produk','ApiProdukController@getproduk');
Route::post('/produk','ApiProdukController@postproduk');
Route::put('/produk/{id}', 'ApiProdukController@updateproduk');
Route::get('/produk/{id}','ApiProdukController@deleteproduk');

//Customer
Route::post('/registercustomer','ApiCustomerController@registercustomer');
//Kategori
Route::get('/kategori','ApiKategoriController@getkategori');