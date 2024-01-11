<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    // Display About route
    public function AboutPage () {

        $aboutPage = About::find(1);

        return view('admin.about.about_page', compact('aboutPage'));
    }

    // Update about section
    public function UpdateAbout (Request $request) {

        $about_id = $request->id;

        About::findOrFail($about_id)->update([
            'long_description' => $request->long_description,
        ]);

        $notification = array(
            'message' => 'About section updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
