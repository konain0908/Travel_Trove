<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\Auth_Controller;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RoleController;






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

Route::get('offers', function () {
    return view('adminpages.layouts.offers');
})->name('of');

// Route::get('offers', function () {
//     return view('adminpages.layouts.offers');
// })->name('of');

Route::post('/destinations', [DestinationController::class, 'store'])->name('dest.store');
Route::post('/offers', [OfferController::class, 'offerstore'])->name('off.store');

Route::get('/showdestinations',[Auth_Controller::class, 'showdestinations'])->name('sd');
<<<<<<< HEAD
=======



>>>>>>> 0b2be589f5c198e098de10083560c12cf4b9f66f
// Route::get('/offer',[OfferController::class, 'country'])->name("of");
Route::get('/showoffer',[OfferController::class, 'showoffer'])->name("so");

Route::get('/create-user', [Auth_Controller::class, 'createUser']);
Route::get('/login', [Auth_Controller::class, 'login'])->name('login');
Route::get('/logout', [Auth_Controller::class, 'logout']);
Route::post('/login', [Auth_Controller::class, 'authLogin'])->name('login');
Route::get('/adminDashboard', [Auth_Controller::class, 'login']);


// Registration routes
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('reg');
// Route to handle registration form submission
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');


Route::delete('destinations/{id}', [DestinationController::class, 'deleteDestination'])->name('destinations.delete');
Route::get('destinations/{id}/edit', [DestinationController::class, 'edit'])->name('des.edit');
Route::put('destinations/{id}', [DestinationController::class, 'update'])->name('des.update');


<<<<<<< HEAD
=======
Route::post('/search', [DestinationController::class, 'search'])->name('search');

Route::get('/', [ShowController::class, 'showdestinations']);



>>>>>>> 0b2be589f5c198e098de10083560c12cf4b9f66f


