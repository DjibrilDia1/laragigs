<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/',function(){
    return view('listings',[
        'headings' => 'data',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing one'
            ],
            [
                'id' => 2,
                'title' => 'Listing two'
            ],
        ]
    ]);
});





