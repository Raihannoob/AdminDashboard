<?php

namespace App\Http\Controllers\Frontend\FaqPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqPageController extends Controller
{
    
    public function index()
    {
        return view('frontend.layout.faqPage.index');
    }
}