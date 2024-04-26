<?php

namespace App\Http\Controllers\Frontend\ViewDetailPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewDetailPageController extends Controller
{
    public function index()
    {
        return view('frontend.layout.viewDetailPage.index');
    }
}