<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instagram;

class InstagramController extends Controller
{
    // Display Instagram route
    public function Instagram () {

        $instagram = Instagram::find(1);

        return view('admin.social.instagram', compact('instagram'));
    }

    // Update Instagram link
    public function UpdateInstagram (Request $request) {

        $instagram_id = $request->id;

        Instagram::findOrFail($instagram_id)->update([
            'instagram_link' => $request->instagram_link,
        ]);

        $notification = array(
            'message' => 'Instagram link updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
