<?php

namespace App\Http\Controllers\Web\Frontend\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        
        return view('frontend.layout.homePage.index');
    }
}