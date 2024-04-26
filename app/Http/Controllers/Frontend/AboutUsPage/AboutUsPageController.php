<?php

namespace App\Http\Controllers\Frontend\AboutUsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsPageController extends Controller
{
    //
    public function index()
    {
        return view('frontend.layout.aboutUs.index');
    }
}