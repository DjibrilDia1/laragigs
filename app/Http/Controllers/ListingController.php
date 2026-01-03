<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listings
    public function index()
    {   
        $listing = Listing::all();
        return view('listings.index', [
            'listings' => $listing
        ]);
    }

    // show single listing
    public function show(Listing $listing)
    {   
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
