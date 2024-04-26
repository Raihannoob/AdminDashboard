<?php

namespace App\Http\Controllers\Frontend\UserProfilePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfilePageController extends Controller
{
    //

    public function index()
    {
        return view('frontend.layout.userProfilePage.index');
    }
}