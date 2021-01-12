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

Route::get('/articles',"ArticleController@index")->name('article.index');

Route::get('/articles/add',"ArticleController@add")->name('add-article-form');
Route::post('/articles/add',"ArticleController@create");

Route::get('/articles/detail/{id}',"ArticleController@detail");

Route::get('/articles/edit/{id}',"ArticleController@edit");
Route::put('/articles/edit/{id}',"ArticleController@update");

Route::get('/articles/delete/{id}',"ArticleController@delete");

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/logout',"AuthController@logout");

Route::middleware(['auth:sanctum','verified'])->get('/articles',"ArticleController@index")->name('article.index');
