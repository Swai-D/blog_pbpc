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

//http://127.0.0.1:8000/ (Home page)
Route::get('/', function () {
    return view('home');
});



//Main View Routes
Route::get('/pbpc_Main_content_1','IndexController@pbpc_Main_content_1');
Route::get('/pbpc_Main_content_2','IndexController@pbpc_Main_content_2');
Route::get('/pbpc_Main_content_3','IndexController@pbpc_Main_content_3');

//Sub Main View Routes
Route::get('/pbpc_Sub_content_1','IndexController@pbpc_Sub_content_1');
Route::get('/pbpc_Sub_content_2','IndexController@pbpc_Sub_content_2');
Route::get('/pbpc_Sub_content_3','IndexController@pbpc_Sub_content_3');
Route::get('/pbpc_Sub_content_4','IndexController@pbpc_Sub_content_4');

//Min Main View
Route::get('/pbpc_Min_content_1','IndexController@pbpc_Min_content_1');
Route::get('/pbpc_Min_content_2','IndexController@pbpc_Min_content_2');
Route::get('/pbpc_Min_content_3','IndexController@pbpc_Min_content_3');
Route::get('/pbpc_Min_content_4','IndexController@pbpc_Min_content_4');
Route::get('/pbpc_Min_content_5','IndexController@pbpc_Min_content_5');
Route::get('/author','IndexController@author');

//Admin Window Routes
Route::get('/admin_index','AdminController@index');
Route::get('/admin_create_post','PostController@create');
Route::get('/admin_edit_post','PostController@edit');
Route::post('/send_post','PostController@store');
Route::get('/likes','PostController@likes');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('layout.app_admin');
});

Route::get('/search','SearchController@search');
