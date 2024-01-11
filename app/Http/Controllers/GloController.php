<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glo;
use Illuminate\Support\Carbon;

class GloController extends Controller
{
    // Display all Glo Data route
    public function AllGlo () {

        $gloData = Glo::latest()->get();

        return view('admin.glo.all_glo', compact('gloData'));
    }

    // Add Glo Data
    public function AddGlo () {

        return view('admin.glo.add_glo');
    }

    // Store Glo data plans
    public function StoreGlo (Request $request) {

        $request->validate([
            'glo_data' => 'required',
            'glo_price' => 'required',
        ],

        [
            // 'title.required' => 'Slide title is required',
            // 'description.required' => 'Slide description is required',
            // 'slide_image.required' => 'Slide image is required',
        ]);

        Glo::insert([
            'glo_data' => $request->glo_data,
            'glo_price' => $request->glo_price,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Glo data plan inserted successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.glo.data')->with($notification);
    }

    // Edit Glo data plans
    public function EditGlo ($id) {

        $gloData = Glo::findOrFail($id);

        return view('admin.glo.edit_glo', compact('gloData'));
    }

    // Update Glo
    public function UpdateGlo (Request $request) {

        $glo_id = $request->id;

        Glo::findOrFail($glo_id)->update([
            'glo_data' => $request->glo_data,
            'glo_price' => $request->glo_price,
        ]);

        $notification = array(
           'message' => 'Glo data plan updated successfully',
           'alert-type' => 'success',
        );

        return redirect()->route('all.glo.data')->with($notification);
    }

    // Delete Data plans
    public function DeleteGlo ($id) {

        Glo::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Glo plan deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
