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


