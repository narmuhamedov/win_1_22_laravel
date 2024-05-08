<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home-page');

Route::get('/about', function (){
    return view('about');
})->name('about-page');

Route::get('/contact', function (){
   return view('contact');
})->name('contact-page');

Route::post('/contact/submit', "ContactController@submit")->name('contact-form');


Route::get('/contact/all', "ContactController@allData")->name('contact-data');
Route::get('/contact/all/{id}', "ContactController@detailMessage")->name('contact-detail');
Route::get('/contact/all/{id}/update', 'ContactController@updateMessage'
)->name('contact-update');
Route::post('/contact/all/{id}/update', 'ContactController@updateMessageSubmit'
)->name('contact-update-submit');
Route::get('/contact/all/{id}/delete', 'ContactController@deleteMessage'
)->name('contact-delete');
