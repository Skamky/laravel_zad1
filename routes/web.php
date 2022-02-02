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
//тут ссылки на страницу (uri) которая будет отображаться в строке браузера
// и контроллер (app/http/controllers/название_файла_контроллера)
// где IndexController - название класса и файла контроллера
// @home - название вызаваемого метода
//Route::get('/welcome','IndexController@welcome');
Route::get('/', 'IndexController@home');
//Route::get('/{userName}','IndexController@UserPage');
Route::get('/{numb}', 'IndexController@numbers');

