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
Route::resource('articles', 'ArticlesController');
Route::get('/test', 'TestController@index');
Route::get('/test2', 'Test2Controller@index');
Route::get('/test3', 'Test2Controller@test3');
/* Route::get('/hello', 'HelloController@index'); */

/* Route::resource('tasks', 'TaskController'); */

/* Route::get('/itemlist', 'ItemlistController@index'); */
