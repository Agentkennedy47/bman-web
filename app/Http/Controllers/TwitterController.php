<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Twitter;

class TwitterController extends Controller
{
    // Display Twitter route
    public function Twitter () {

        $twitter = Twitter::find(1);

        return view('admin.social.twitter', compact('twitter'));
    }

    // Update Twitter link
    public function UpdateTwitter (Request $request) {

        $twitter_id = $request->id;

        Twitter::findOrFail($twitter_id)->update([
            'twitter_link' => $request->twitter_link,
        ]);

        $notification = array(
            'message' => 'Twitter link updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
