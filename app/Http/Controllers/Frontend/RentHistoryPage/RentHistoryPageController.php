<?php

namespace App\Http\Controllers\Frontend\RentHistoryPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentHistoryPageController extends Controller
{
    //
    public function index()
    {
        return view('frontend.layout.rentHistoryPage.index');
    }
}