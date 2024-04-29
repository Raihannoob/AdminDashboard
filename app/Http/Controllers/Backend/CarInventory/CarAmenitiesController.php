<?php

namespace App\Http\Controllers\Backend\CarInventory;
use App\Models\CarAmenities;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class CarAmenitiesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CarAmenities::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    $status = ' <div class="form-check form-switch" style="margin-left:40px;">';
                    $status .= ' <input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status"';
                    if ($data->status == "active") {
                        $status .= "checked";
                    }
                    $status .= '><label for="customSwitch' . $data->id . '" class="form-check-label" for="customSwitch"></label></div>';

                    return $status;
                })
                ->addColumn('action', function ($data) {

                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                              <a href="javascript:void(0)" onclick="showEditForm(' . $data->id . ')" type="button" class="btn btn-primary text-white" title="Edit">
                              <i class="bi bi-pencil"></i>
                              </a>
                              <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                              <i class="bi bi-trash"></i>
                            </a>
                            </div>';
                })
                ->rawColumns(['status', 'action'])
                ->make();
        }
        return view('backend.layout.car_amenities.index');
    }

    public function store(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'type' => 'required|string',
                'title' => 'required|string',
                
            ]);

            // Check if an 'id' parameter is present in the request
            if ($request->id) {
                // Update existing product category
                $CarAmenities = CarAmenities::findOrFail($request->id);
                $CarAmenities->update([
                    'title' => $request->title,
                    'type' => $request->type,
                ]);

                // Return success response
                return response()->json([
                    'success' => true,
                    'message' => "Updated Successfully",
                ]);
            } else {
                // Create a new product category
                $CarAmenities = new CarAmenities();
                $CarAmenities->title = $request->title;
                $CarAmenities->type = $request->type;
                $CarAmenities->save();

                // Return success response
                return response()->json([
                    'success' => true,
                    'message' => "Added Successfully",
                ]);
            }
        } catch (\Exception $e) {
            // Catch any exceptions and return error response
            return response()->json([
                'success' => false,
                'message' => "An error occurred: " . $e->getMessage(),
            ]);
        }
    }




    public function edit($id)
    {
        try {
            // Retrieve data for the product category with the given ID
            $data = CarAmenities::where('id', $id)->first();

            // Check if data is found
            if ($data) {
                // Return success response with data
                return response()->json([
                    'success' => true,
                    'data' => $data,
                ]);
            } else {
                // Return error response if data is not found
                return response()->json([
                    'success' => false,
                    'message' => "Product category not found",
                ], 404); // HTTP status code 404 indicates "Not Found"
            }
        } catch (\Exception $e) {
            // Catch any exceptions and return error response
            return response()->json([
                'success' => false,
                'message' => "An error occurred: " . $e->getMessage(),
            ], 500); // HTTP status code 500 indicates "Internal Server Error"
        }
    }


    public function status(int $id)
    {
        try {
            // Find the product category with the given ID
            $data = CarAmenities::findOrFail($id);
    
            // Toggle the status between 'active' and 'inactive'
            if ($data->status == 'active') {
                $data->status = 'inactive';
                $data->save();
    
                // Return response for status change to 'inactive'
                return response()->json([
                    'error' => false,
                    'message' => 'Unpublished Successfully.',
                    'data' => $data,
                ]);
            } else {
                $data->status = 'active';
                $data->save();
    
                // Return response for status change to 'active'
                return response()->json([
                    'success' => true,
                    'message' => 'Published Successfully.',
                    'data' => $data,
                ]);
            }
        } catch (\Exception $e) {
            // Catch any exceptions and return error response
            return response()->json([
                'success' => false,
                'message' => "An error occurred: " . $e->getMessage(),
            ], 500); // HTTP status code 500 indicates "Internal Server Error"
        }
    }
    
    
        public function destroy(int $id)
    {
        try {
            // Find the product category with the given ID
            $CarAmenities = CarAmenities::findOrFail($id);
    
            // Delete the found product category
            $CarAmenities->delete();
    
            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Deleted successfully.',
            ]);
        } catch (\Exception $e) {
            // Catch any exceptions and return error response
            return response()->json([
                'success' => false,
                'message' => "An error occurred: " . $e->getMessage(),
            ], 500); // HTTP status code 500 indicates "Internal Server Error"
        }
    }
}