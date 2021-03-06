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



Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::group(['middleware' => 'auth'], function () {

// slider rout
Route::get('/backend/slider/create','Backend\SliderController@create');         
Route::post('/backend/slider/store','Backend\SliderController@store');         
Route::get('/backend/slider/list','Backend\SliderController@list');         
Route::get('/backend/slider/edit/{id}','Backend\SliderController@edit');         
Route::post('/backend/slider/update/{id}','Backend\SliderController@update');         
Route::get('/backend/slider/delete/{id}','Backend\SliderController@delete');         

// team rout
Route::get('/backend/team/create','Backend\TeamController@create');
Route::post('/backend/team/store','Backend\TeamController@store');
Route::get('/backend/team/list','Backend\TeamController@list');
Route::get('/backend/team/edit/{id}','Backend\TeamController@edit');
Route::post('/backend/team/update/{id}','Backend\TeamController@update');
Route::get('/backend/team/delete/{id}','Backend\TeamController@delete');

// blog rout
Route::get('/backend/blog/create','Backend\BlogController@create');
Route::post('/backend/blog/store','Backend\BlogController@store');
Route::get('/backend/blog/list','Backend\BlogController@list');
Route::get('/backend/blog/edit/{id}','Backend\BlogController@edit');
Route::post('/backend/blog/update/{id}','Backend\BlogController@update');
Route::get('/backend/blog/delete/{id}','Backend\BlogController@delete');

// services rout
Route::get('/backend/servicess/create','Backend\ServicesController@create');
Route::post('/backend/servicess/store','Backend\ServicesController@store');
Route::get('/backend/servicess/list','Backend\ServicesController@list');
Route::get('/backend/servicess/edit/{id}','Backend\ServicesController@edit');
Route::post('/backend/servicess/update/{id}','Backend\ServicesController@update');
Route::get('/backend/servicess/delete/{id}','Backend\ServicesController@delete');

// gallery rout
Route::get('/backend/gallery/create','Backend\GalleryController@create');
Route::post('/backend/gallery/store','Backend\GalleryController@store');
Route::get('/backend/gallery/list','Backend\GalleryController@list');
Route::get('/backend/gallery/edit/{id}','Backend\GalleryController@edit');
Route::post('/backend/gallery/update/{id}','Backend\GalleryController@update');
Route::get('/backend/gallery/delete/{id}','Backend\GalleryController@delete');

// testimonial rout
Route::get('/backend/testimonial/create','Backend\TestimonialController@create');
Route::post('/backend/testimonial/store','Backend\TestimonialController@store');
Route::get('/backend/testimonial/list','Backend\TestimonialController@list');
Route::get('/backend/testimonial/edit/{id}','Backend\TestimonialController@edit');
Route::post('/backend/testimonial/update/{id}','Backend\TestimonialController@update');
Route::get('/backend/testimonial/delete/{id}','Backend\TestimonialController@delete');

// allsettings rout
Route::get('/backend/allsettings/create','Backend\SettingsController@create');
Route::post('/backend/allsettings/store','Backend\SettingsController@store');

});




