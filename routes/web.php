<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/destinations', function () {
    return view('pages.destination');
})->name('destinations');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/booknow', function () {
    return view('booking.create');
})->name('booknow');
