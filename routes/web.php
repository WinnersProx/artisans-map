<?php


Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'ContactsController@create')->name('contact');
