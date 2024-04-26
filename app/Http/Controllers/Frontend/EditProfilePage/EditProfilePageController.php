<?php

namespace App\Http\Controllers\Frontend\EditProfilePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditProfilePageController extends Controller
{
    //
    public function index()
    {
        return view('frontend.layout.editProfilePage.index');
    }
}