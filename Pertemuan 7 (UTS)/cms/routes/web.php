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

// Route::get('/', 'HomeController@home');
// Route::get('/about', 'AboutController@about');
// Route::get('/articles/{id}', 'ArticleController');

// Route::get('/home', 'HomeController');
// Route::get('/post/{id}', 'ArticleController@article');
Route::get('/', 'HomeController@index');
Route::get('/indexx/{id}', 'IndexController@index');
Route::get('/homeviews', 'Homeviews@homeviews');
Route::get('/sejarahview/{id}', 'Sejarahviews@sejarahviews');
Route::get('/templateviews', 'Templateviews@templ');
Route::get('/Winbox/{id}', 'Winbox@winbox');
Route::get('/fungsi/{id}', 'Fungsi@fungsi');
Route::get('/manage', 'Homeviews@manage')->name('manage');
Route::get('/mikrotik/create', 'Homeviews@create')->name('create');
Route::post('/manage', 'Homeviews@store')->name('store');
Route::delete('/manage/delete/{id}','Homeviews@destroy');
Route::get('/manage/edit/{id}','Homeviews@edit');
Route::post('/manage/update/{id}','Homeviews@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
