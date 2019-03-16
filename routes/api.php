<?php

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
//List articles 
Route::get('/detail','api@detail');

//list single artikel
Route::get('artikel/{id}','ArtikelController@show');
//create new article 
Route::post('artikel','ArtikelController@store');
//update articles 
Route::put('artikel','ArtikelController@store');
//delete article
Route::delete('artikel','ArtikelController@destroy');	



