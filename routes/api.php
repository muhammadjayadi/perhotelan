<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('password',function(){
    return bcrypt('jayadi');
});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('login/create', 'AuthController@store');
});

Route::get('kamar','API\KamarController@index');
Route::post('kamar/create','API\KamarController@store');
Route::patch('kamar/update/{id}','API\KamarController@update');
Route::delete('kamar/delete/{data}','API\KamarController@destroy');


Route::get('pengunjung','API\PengunjungController@index');
Route::post('pengunjung/create','API\PengunjungController@store');
Route::patch('pengunjung/update/{id}','API\PengunjungController@update');
Route::delete('pengunjung/delete/{data}','API\PengunjungController@destroy');
// ->middleware('auth');


Route::get('transaksi','API\TransaksiController@index');
Route::post('transaksi/create','API\TransaksiController@store');
Route::patch('transaksi/update/{id}','API\TransaksiController@update');
Route::delete('transaksi/delete/{data}','API\TransaksiController@destroy');
