<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepages.welcome');
});

Route::get('services', function () {
    return view('homepages.services');
})->name('service');

Route::get('about', function () {
    return view('homepages.about');
})->name('about');

Route::get('contact', function () {
    return view('homepages.contact');
})->name('contact');

Route::get('login', function () {
    return view('homepages.login');
})->name('login');



//konain 