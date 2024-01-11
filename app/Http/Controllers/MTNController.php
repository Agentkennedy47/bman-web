<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MTN;
use Illuminate\Support\Carbon;

class MTNController extends Controller
{
    // Display all MTN Data route
    public function allMTN () {

        $mtnData = MTN::latest()->get();

        return view('admin.mtn.all_mtn', compact('mtnData'));
    }

    // Add MTN Data
    public function addMTN () {

        return view('admin.mtn.add_mtn');
    }

    // Store MTN data plans
    public function storeMTN (Request $request) {

        $request->validate([
            'mtn_data' => 'required',
            'mtn_price' => 'required',
        ],

        [
            // 'title.required' => 'Slide title is required',
            // 'description.required' => 'Slide description is required',
            // 'slide_image.required' => 'Slide image is required',
        ]);

        MTN::insert([
            'mtn_data' => $request->mtn_data,
            'mtn_price' => $request->mtn_price,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'MTN data plan inserted successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.mtn.data')->with($notification);
    }

    // Edit MTN data plans
    public function editMTN ($id) {

        $mtnData = MTN::findOrFail($id);

        return view('admin.mtn.edit_mtn', compact('mtnData'));
    }

    // Update Testimonial
    public function updateMTN (Request $request) {

        $mtn_id = $request->id;

        MTN::findOrFail($mtn_id)->update([
            'mtn_data' => $request->mtn_data,
            'mtn_price' => $request->mtn_price,
        ]);

        $notification = array(
           'message' => 'MTN data plan updated successfully',
           'alert-type' => 'success',
        );

        return redirect()->route('all.mtn.data')->with($notification);
    }

    // Delete Data plans
    public function deleteMTN ($id) {

        MTN::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Data plan deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
