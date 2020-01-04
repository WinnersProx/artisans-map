<?php

use App\Mail\ContactMessageCreated;

Route::view('/', 'welcome')->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/contact', 'ContactsController@create')->name('contact');

Route::post('/contact', 'ContactsController@store')->name('contact.store');
