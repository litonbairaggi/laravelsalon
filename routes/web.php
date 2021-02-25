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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','PageController@home');
Route::get('/about','PageController@about');
Route::get('/services','PageController@services');
Route::get('/services_details','PageController@services_details');
Route::get('/gallery','PageController@gallery');
Route::get('/gallery_02','PageController@gallery_02');
Route::get('/gallery_03','PageController@gallery_03');
Route::get('/blog','PageController@blog');
Route::get('/blog_details','PageController@blog_details');
Route::get('/blog_grid','PageController@blog_grid');
Route::get('/blog_list','PageController@blog_list');
Route::get('/testimonials','PageController@testimonials');
Route::get('/contact','PageController@contact');

// team rout
Route::get('/backend/team/create','Backend\TeamController@create');
Route::post('/backend/team/store','Backend\TeamController@store');
Route::get('/backend/team/list','Backend\TeamController@list');
Route::get('/backend/team/edit','Backend\TeamController@edit');
Route::get('/backend/team/detete/{id}','Backend\TeamController@delete');


