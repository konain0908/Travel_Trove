<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\Auth_Controller;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCon;









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
// Registration routes
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('reg');
// Route to handle registration form submission
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');

Route::get('/create-user', [Auth_Controller::class, 'createUser']);
Route::get('/login', [Auth_Controller::class, 'login'])->name('login');
Route::get('/logout', [Auth_Controller::class, 'logout']);
Route::post('/login', [Auth_Controller::class, 'authLogin'])->name('login');
Route::get('/adminDashboard', [Auth_Controller::class, 'login']);
Route::get('/', [ShowController::class, 'showdestinations']);

// Route::get('offers', function () {
//     return view('adminpages.layouts.offers');
// })->name('of');

Route::group(['middleware' => 'useradmin'], function () {

Route::post('/destinations', [DestinationController::class, 'store'])->name('dest.store');
Route::post('/offers', [OfferController::class, 'offerstore'])->name('off.store');
Route::get('/showdestinations',[Auth_Controller::class, 'showdestinations'])->name('sd');
// Route::get('/offer',[OfferController::class, 'country'])->name("of");
Route::get('/showoffer',[OfferController::class, 'showoffer'])->name("so");

Route::delete('offers/{id}', [OfferController::class, 'deleteOffer'])->name('off.delete');
Route::get('offers/{id}/edit', [OfferController::class, 'edit'])->name('off.edit');
Route::put('offers/{id}', [OfferController::class, 'update'])->name('off.update');




Route::delete('destinations/{id}', [DestinationController::class, 'deleteDestination'])->name('destinations.delete');
Route::get('destinations/{id}/edit', [DestinationController::class, 'edit'])->name('des.edit');
Route::put('destinations/{id}', [DestinationController::class, 'update'])->name('des.update');
Route::post('/search', [DestinationController::class, 'search'])->name('search');

// Route::get('/panel/user', [UserController::class, 'list'])->name('user.list');

Route::get('/panel/role', [RoleController::class, 'list'])->name('role.list');
Route::get('/panel/role/add', [RoleController::class, 'add'])->name('add');
Route::post('/panel/role/add', [RoleController::class, 'insert'])->name('ar');
Route::get('/panel/role/edit/{id}', [RoleController::class, 'edit'])->name('edit');
Route::post('/panel/role/update/{id}', [RoleController::class, 'update'])->name('ur');
Route::get('/panel/role/delete/{id}', [RoleController::class, 'delete'])->name('delete');

Route::get('/panel/user',[UserController::class,'list'])->name('user.list');
Route::get('/panel/user/add',[UserController::class,'add'])->name('adduser');
Route::post('/panel/user/add',[UserController::class,'insert']);

// user Dashboard routes
Route::get('/showuseroffer',[UserCon::class, 'showoffer'])->name("uso");
Route::get('/booking/create', [UserCon::class, 'create'])->name('bf');
Route::post('/booking/store', [UserCon::class, 'bookstore'])->name('booking.store');
Route::get('/showbookings',[UserCon::class, 'viewBookings'])->name('sb');






});






