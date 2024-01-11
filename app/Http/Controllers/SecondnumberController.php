<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secondnumber;

class SecondnumberController extends Controller
{
    // Display second contact number route
    public function SecondContact () {

        $second_contact = Secondnumber::find(1);

        return view('admin.contact.second_number', compact('second_contact'));
    }

    // Update second contact number
    public function UpdateSecondContact (Request $request) {

        $second_contact_id = $request->id;

        Secondnumber::findOrFail($second_contact_id)->update([
            'second_number' => $request->second_number,
        ]);

        $notification = array(
            'message' => 'Contact number updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
