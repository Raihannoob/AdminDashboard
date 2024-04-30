<?php

namespace App\Http\Controllers\Backend\CarInventory;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarType;
use App\Models\CarAmenities;
use App\Models\CarLocation;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class CarController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Car::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($data) {
                    // Adding status column with a custom-styled switch
                    $status = '<div class="custom-control custom-switch">';
                    $status .= '<input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="custom-control-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status"';
                    if ($data->status == "active") {
                        $status .= " checked"; // Add space before 'checked' to ensure proper attribute syntax
                    }
                    $status .= '><label class="custom-control-label" for="customSwitch' . $data->id . '"></label></div>';

                    return $status;
                })

                ->addColumn('action', function ($data) {
                    // Adding action buttons for edit and delete
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                              <a href="' . route('service.list.edit', ['id' => $data->id]) . '" type="button" class="btn btn-success text-white" title="Edit">
                                <i class="mdi mdi-pencil"></i>
                              </a>
                              <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                              <i class="mdi mdi-delete"></i>
                            </a>
                            </div>';
                })
                ->rawColumns(['status', 'action',])
                ->make(true);
        }

        // If not an AJAX request, return the view for the giftvoucher index page
        return view('backend.layout.cars.index');
    }
    
    public function create()
    {   $CarType = CarType::all();
        $CarAmenities = CarAmenities::all();
        $CarLocation = CarLocation::all();
        return view('backend.layout.cars.create',compact('CarType','CarAmenities','CarLocation'));
    }
}