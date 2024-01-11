<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facebook;

class FacebookController extends Controller
{
    // Display Facebook route
    public function Facebook () {

        $facebook = Facebook::find(1);

        return view('admin.social.facebook', compact('facebook'));
    }

    // Update Facebook link
    public function UpdateFacebook (Request $request) {

        $facebook_id = $request->id;

        Facebook::findOrFail($facebook_id)->update([
            'facebook_link' => $request->facebook_link,
        ]);

        $notification = array(
            'message' => 'Facebook link updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
