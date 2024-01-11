<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use Illuminate\Support\Carbon;

class MobileController extends Controller
{
    // Display all 9mobile Data route
    public function allMobile () {

        $mobileData = Mobile::latest()->get();

        return view('admin.mobile.all_mobile', compact('mobileData'));
    }

    // Add 9mobile Data
    public function AddMobile () {

        return view('admin.mobile.add_mobile');
    }

    // Store 9mobile data plans
    public function StoreMobile (Request $request) {

        $request->validate([
            'mobile_data' => 'required',
            'mobile_price' => 'required',
        ],

        [
            // 'title.required' => 'Slide title is required',
            // 'description.required' => 'Slide description is required',
            // 'slide_image.required' => 'Slide image is required',
        ]);

        Mobile::insert([
            'mobile_data' => $request->mobile_data,
            'mobile_price' => $request->mobile_price,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => '9mobile data plan inserted successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.mobile.data')->with($notification);
    }

    // Edit 9mobile data plans
    public function EditMobile ($id) {

        $mobileData = Mobile::findOrFail($id);

        return view('admin.mobile.edit_mobile', compact('mobileData'));
    }

    // Update 9mobile
    public function UpdateMobile (Request $request) {

        $mobile_id = $request->id;

        Mobile::findOrFail($mobile_id)->update([
            'mobile_data' => $request->mobile_data,
            'mobile_price' => $request->mobile_price,
        ]);

        $notification = array(
           'message' => '9mobile data plan updated successfully',
           'alert-type' => 'success',
        );

        return redirect()->route('all.mobile.data')->with($notification);
    }

    // Delete 9mobile plans
    public function DeleteMobile ($id) {

        Mobile::findOrFail($id)->delete();

        $notification = array(
            'message' => '9mobile plan deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
