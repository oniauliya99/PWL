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
// //about
// Route::get('/about', 'aboutController@about');
// Auth::routes();
// //home
// Route::get('/welcome', 'WelcomeController@welcome');
// Auth::routes();
// //article
// Route::get('/article/{id}', 'articleController@article');
// Auth::routes();
// //nomer 2 
// Route::get('/master', 'newController@master');
// //nomer 1 praktikum2
// Route::get('/bs', 'bsController@bs');
// // Route::get('/welcome', 'homeController@welcome');
// // Route::get('/articles/{id}', 'articleController@articles');
// // Route::get('/',function(){
// // return view('welcome');
// // });
// // Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/articles/{id}', 'ArticleController');

Route::get('/home', 'HomeController');

Route::get('/post/{id}', 'ArticleController@article');