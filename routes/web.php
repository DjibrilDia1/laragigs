<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


// ALL Listings
Route::get('/',[ListingController::class, 'index']);

// Single listing
Route::get('/listings/{listing}',[ListingController::class,'show']);





