<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airtel;
use Illuminate\Support\Carbon;

class AirtelController extends Controller
{
    // Display all Airtel Data route
    public function AllAirtel () {

        $airtelData = Airtel::latest()->get();

        return view('admin.airtel.all_airtel', compact('airtelData'));
    }

    // Add Airtel Data
    public function AddAirtel () {

        return view('admin.airtel.add_airtel');
    }

    // Store Airtel data plans
    public function StoreAirtel (Request $request) {

        $request->validate([
            'airtel_data' => 'required',
            'airtel_price' => 'required',
        ],

        [
            // 'title.required' => 'Slide title is required',
            // 'description.required' => 'Slide description is required',
            // 'slide_image.required' => 'Slide image is required',
        ]);

        Airtel::insert([
            'airtel_data' => $request->airtel_data,
            'airtel_price' => $request->airtel_price,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Airtel data plan inserted successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.airtel.data')->with($notification);
    }

    // Edit Airtel data plans
    public function EditAirtel ($id) {

        $airtelData = Airtel::findOrFail($id);

        return view('admin.airtel.edit_airtel', compact('airtelData'));
    }

    // Update Airtel
    public function UpdateAirtel (Request $request) {

        $airtel_id = $request->id;

        Airtel::findOrFail($airtel_id)->update([
            'airtel_data' => $request->airtel_data,
            'airtel_price' => $request->airtel_price,
        ]);

        $notification = array(
           'message' => 'Airtel data plan updated successfully',
           'alert-type' => 'success',
        );

        return redirect()->route('all.airtel.data')->with($notification);
    }

    // Delete Data plans
    public function DeleteAirtel ($id) {

        Airtel::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Airtel plan deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
