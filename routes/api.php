<?php

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


// Route::get('/books', 'BookController@index');
// Route::post('/books/create', 'BookController@store');
// Route::post('/books/update/{id}', 'BookController@update');
// Route::delete('/books/delete/{id}', 'BookController@destroy');

Route::resource('books','BookController');
Route::resource('authors','AuthorController');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    // User Model
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@userProfile');
});