<?php

namespace App\Http\Controllers\Frontend\listingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarListingPageController extends Controller
{
    public function index()
    {
        return view('frontend.layout.listingPage.index');
    }
}