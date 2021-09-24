<?php

// Site Languages
Route::get('language/{language}', 'LanguagesController@setLanguage')->name('language');

/*
 * Public
 * */
Route::get('/', 'PublicController@home')->name('public.home');
Route::get('about-us', 'PublicController@about')->name('public.about');
Route::get('products', 'PublicController@products')->name('public.products');
Route::get('product/{id}', 'PublicController@product')->name('public.product');
Route::get('contact-us', 'PublicController@contact')->name('public.contact');

/*
 * Dashboard
 * */
Auth::routes();
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function (){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::resource('about', 'AboutController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('slider', 'SliderController');
    Route::resource('social', 'SocialController');
    Route::resource('media', 'MediaController');
    Route::resource('testimonial', 'TestimonialController');
});
