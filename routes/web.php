<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth_Controller;
use App\Http\Controllers\DestinationController;


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

Route::get('destinations', function () {
    return view('adminpages.layouts.destinations');
})->name('ds');

Route::post('/destinations', [DestinationController::class, 'store'])->name('dest.store');

Route::get('/showdestinations',[Auth_Controller::class, 'showdestinations'])->name('sd');




