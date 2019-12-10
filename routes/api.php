<?php

use Illuminate\Http\Request;
use App\Article;

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


Route::get('articles', 'PostController@index');
Route::get('article/{id}', 'PostController@show');
Route::post('article', 'PostController@store');
Route::put('article/{id}', 'PostController@store');
Route::delete('article/{id}', 'PostController@delete');
