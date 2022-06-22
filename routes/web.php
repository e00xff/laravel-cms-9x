<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// All listings
Route::get('/', function () {
    $listings = Listing::all();

    return view('listings', compact('listings'));
});

// Single listing
Route::get('/listings/{id}', function ($id) {

    $listing = Listing::find($id);

    return view('listing', compact('listing'));
});

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
