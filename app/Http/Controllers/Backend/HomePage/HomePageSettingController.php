<?php

namespace App\Http\Controllers\Backend\HomePage;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\BookinStep;
use App\Models\HomePageSetting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageSettingController extends Controller
{
    public function index()
    {
        // Retrieve the first HomePageSetting  information record
        $HomePageSetting = HomePageSetting::first();
        $BookinStep = BookinStep::all();
        return view('backend.layout.home_page.index', compact('HomePageSetting', 'BookinStep'));
    }

    // public function update(Request $request)
    // {

    //         // Validate the incoming request data
    //         $validatedData = $request->validate([
    //             'id' => 'nullable',
    //             'hero_title' => 'required|string',
    //             'step_title' => 'required|string',
    //             'step_description' => 'required|string',
    //             'home_banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
    //             'step_name.*' => 'required|string',
    //             'step_detail.*' => 'required|string',
    //         ]);

    //         // Retrieve the HomePageSetting instance based on the provided ID
    //         if ($request->id) {
    //             $HomePageSetting = HomePageSetting::findOrFail($request->id);
    //         } else {
    //             $HomePageSetting = new HomePageSetting();
    //         }

    //         // Update HomePageSetting instance with the new data
    //         $HomePageSetting->hero_title = $validatedData['hero_title'];
    //         $HomePageSetting->step_title = $validatedData['step_title'];
    //         $HomePageSetting->step_description = $validatedData['step_description'];

    //         // Delete old image and save new image if provided

    //             Helper::deleteImage($HomePageSetting->home_banner_image, $request->home_banner_image);
    //             $home_banner_image = Helper::saveImage($request->home_banner_image, 'homepage', 'home-step-image', $HomePageSetting->home_banner_image);
    //             $HomePageSetting->home_banner_image = $home_banner_image;

    //         $HomePageSetting->save();
    //         // Update or create BookinStep instances
    //         foreach ($validatedData['step_name'] as $index => $step_name) {
    //             $StepId = $request->StepId[$index] ?? null;

    //             if ($StepId) {
    //                 // Update existing BookinStep instance
    //                 $BookinStep = BookinStep::find($StepId);
    //                 $BookinStep->step_name = $step_name;
    //                 $BookinStep->step_detail = $validatedData['step_detail'][$index];
    //                 $BookinStep->save();
    //             } else {
    //                 // Create new BookinStep instance
    //                 $BookinStep = new BookinStep();
    //                 $BookinStep->step_name = $step_name;
    //                 $BookinStep->step_detail = $validatedData['step_detail'][$index];
    //                 $BookinStep->save();
    //             }
    //         }
    //         return redirect()->back()->with('t-success', 'Update successfully');

    // }
    public function update(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'id' => 'nullable',
                'hero_title' => 'required|string',
                'step_title' => 'required|string',
                'step_description' => 'required|string',
                'home_banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                'step_name.*' => 'required|string',
                'step_detail.*' => 'required|string',
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
            if ($request->hasFile('home_banner_image')) {
                Helper::deleteImage($HomePageSetting->home_banner_image, $request->home_banner_image);
                $home_banner_image = Helper::saveImage($request->home_banner_image, 'homepage', 'home-step-image', $HomePageSetting->home_banner_image);
                $HomePageSetting->home_banner_image = $home_banner_image;
            }

            $HomePageSetting->save();

            // Update or create BookinStep instances
            foreach ($validatedData['step_name'] as $index => $step_name) {
                $StepId = $request->StepId[$index] ?? null;

                if ($StepId) {
                    // Update existing BookinStep instance
                    $BookinStep = BookinStep::find($StepId);
                    $BookinStep->step_name = $step_name;
                    $BookinStep->step_detail = $validatedData['step_detail'][$index];
                    $BookinStep->save();
                } else {
                    // Create new BookinStep instance
                    $BookinStep = new BookinStep();
                    $BookinStep->step_name = $step_name;
                    $BookinStep->step_detail = $validatedData['step_detail'][$index];
                    $BookinStep->save();
                }
            }

            // Redirect back with success message
            return redirect()->back()->with('t-success', 'Update successfully');
        } catch (Exception $e) {
            // Redirect back with error message if an exception occurs
            return redirect()->back()->with('t-error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            // Correctly delete the SocialMedia record by ID
            BookinStep::destroy($id);

            DB::commit();

            return response()->json([
                'success' => true,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }

}