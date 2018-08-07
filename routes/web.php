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

// Route::get('/', function () {return view('welcome');});

// Route::get('/', function () {return view('welcome');});

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about'); //http://sample2.dev/about
Route::get('/services','PagesController@services'); //http://sample2.dev/services
Route::get('/contact','PagesController@contact'); //http://sample2.dev/services
// Route::get('/sendemail', 'SendEmail@fn_sendmail');
// Route::get('/register2', 'RegisterController@validator');


Route::get('/main_menu', 'PagesController@main_menu');
Route::get('/submenu_alphabets', 'PagesController@submenu_alphabets');
Route::get('/submenu_colors', 'PagesController@submenu_colors');
Route::get('/submenu_numbers', 'PagesController@submenu_numbers');
Route::get('/submenu_shapes', 'PagesController@submenu_shapes');

Route::get('/submenu_actionwords', 'PagesController@submenu_actionwords');
Route::get('/submenu_expressions', 'PagesController@submenu_expressions');
Route::get('/lesson_alphabets', 'PagesController@lesson_alphabets');
Route::get('/lesson_vowels', 'PagesController@lesson_vowels');
Route::get('/lesson_colors', 'PagesController@lesson_colors');
Route::get('/lesson_numbers', 'PagesController@lesson_numbers');

Route::get('/lesson_shapes', 'PagesController@lesson_shapes');


Route::get('/quiz_alphabetsA', 'PagesController@quiz_alphabetsA');
Route::get('/lesson_alphabetsA', 'PagesController@lesson_alphabetsA');



Route::resource('posts', 'PostsController');
Route::resource('categorys', 'CategorysController');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
