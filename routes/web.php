<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/contacts/all', 'App\Http\Controllers\ContactsController@allData')->name('contacts_data');

Route::post('/contacts/submit', 'App\Http\Controllers\ContactsController@submit')->name('contact_form');
