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
        dd($listing);
        return view('listings', [
            'listings' => $listing
        ]);
    }

    // show single listing
    public function show(Listing $listing)
    {   
        $listing = Listing::find($listing);
        if ($listing) {
            return view('listing', [
                'listing' => $listing
            ]);
        } else {
            abort('404');
        }
    }
}
