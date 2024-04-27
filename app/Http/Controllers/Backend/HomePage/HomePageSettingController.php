<?php

namespace App\Http\Controllers\Backend\HomePage;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\HomePageSetting;
use Illuminate\Http\Request;
use Exception;
class HomePageSettingController extends Controller
{
    public function index()
    {
        // Retrieve the first HomePageSetting  information record
        $HomePageSetting = HomePageSetting::first();
        return view('backend.layout.home_page.index', compact('HomePageSetting'));
    }


    public function update(Request $request)
{
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'id' => 'nullable',
            'hero_title' => 'required|string',
            'step_title' => 'required|string',
            'step_description' => 'required',
            'home_banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        // Retrieve the HomePageSetting instance based on the provided ID
        if ($request->id) {
            $HomePageSetting = HomePageSetting::findOrFail($request->id);
        } else {
            $HomePageSetting = new HomePageSetting();
        }

        // Update HomePageSetting instance with the new data
        $HomePageSetting->hero_title = $validatedData['hero_title'];
        $HomePageSetting->step_title = $validatedData['step_title'];
        $HomePageSetting->step_description = $validatedData['step_description'];

        // Delete old image and save new image if provided
        try {
            Helper::deleteImage($HomePageSetting->home_banner_image, $request->home_banner_image);
            $home_banner_image = Helper::saveImage($request->home_banner_image, 'homepage', 'home-step-image', $HomePageSetting->home_banner_image);
            $HomePageSetting->home_banner_image = $home_banner_image;
        } catch (Exception $e) {
            // Handle image related exceptions here (optional)
            // You can log the error or return a specific error message
            throw $e;
        }

        $HomePageSetting->save();
        return redirect()->back()->with('t-success', 'Update successfully');
    } catch (Exception $e) {
        // Handle any other exceptions that might occur during update process
        // You can log the error, return a generic error message or redirect to an error page
        return redirect()->back()->with('t-error', 'Update failed!');
    }
}

}