<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firstnumber;

class FirstnumberController extends Controller
{
    // Display first contact number route
    public function FirstContact () {

        $first_contact = Firstnumber::find(1);

        return view('admin.contact.first_number', compact('first_contact'));
    }

    // Update first contact number
    public function UpdateFirstContact (Request $request) {

        $first_contact_id = $request->id;

        Firstnumber::findOrFail($first_contact_id)->update([
            'first_number' => $request->first_number,
        ]);

        $notification = array(
            'message' => 'Contact number updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
