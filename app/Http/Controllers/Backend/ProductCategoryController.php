<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ProductCategoryController extends Controller {
    
    public function index(Request $request): View | Factory | JsonResponse {
        if ($request->ajax()) {
            $data = ProductCategory::latest();
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
        return view('backend.layout.product_categories.index');
    }

 
    public function create(): View | Factory {
        return view('backend.layout.product_categories.create');
    }

    public function store(Request $request) {
       $request->validate([
           'title'        => 'required|string',
       ]);
   
       // Check if an 'id' parameter is present in the request
       if ($request->id) {
           
           // Update existing ServiceItem
           $productcategory = productcategory::findOrFail($request->id);
           $productcategory->update([
               'title'        => $request->title,
           ]);
   
           // Return success response
           return response()->json([
               'success' => true,
               'message' => "Updated Successfully",
           ]);
       } else {
           
           // Create a new ServiceItem
           $productcategory = new productcategory();
           $productcategory->title = $request->title;
           $productcategory->save();
   
           // Return success response
           return response()->json([
               'success' => true,
               'message' => "Added Successfully",
           ]);
       }
   }    
    public function edit($id) {
        $data = productcategory::where('id', $id)->first();
        return response()->json([
            'success' => true,
            'data'    => $data,
        ]);
    }

    
    public function status(int $id): JsonResponse {
        $data = ProductCategory::findOrFail($id);

        if ($data->status == 'active') {
            $data->status = 'inactive';
            $data->save();
            return response()->json([
                'error'   => false,
                'message' => 'Unpublished Successfully.',
                'data'    => $data,
            ]);
        } else {
            $data->status = 'active';
            $data->save();
            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data'    => $data,
            ]);
        }
    }

    
    public function destroy(int $id): JsonResponse {
        $productcategory = ProductCategory::findOrFail($id);
        $productcategory->delete();
        return response()->json([
            'success' => true,
            'message' => 'Deleted successfully.',
        ]);
    }
}