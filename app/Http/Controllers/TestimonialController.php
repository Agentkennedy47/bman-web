<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Carbon;

class TestimonialController extends Controller
{
    // Display all Testimonial route
    public function AllTestimonial () {

        $testimonials = Testimonial::latest()->get();

        return view('admin.testimonial.all_testimonials', compact('testimonials'));
    }

    // Add testimonials
    public function AddTestimonial () {

        return view('admin.testimonial.add_testimonials');
    }

    // Store slides
    public function StoreTestimonial (Request $request) {

        $request->validate([
            'testimonial_title' => 'required',
            'testimonial_description' => 'required',
            'testimonial_author' => 'required'
        ],

        [
            // 'title.required' => 'Slide title is required',
            // 'description.required' => 'Slide description is required',
            // 'slide_image.required' => 'Slide image is required',
        ]);

        Testimonial::insert([
            'testimonial_title' => $request->testimonial_title,
            'testimonial_description' => $request->testimonial_description,
            'testimonial_author' => $request->testimonial_author,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Testimonial inserted successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.testimonials')->with($notification);
    }

    // Edit Testimonial
    public function EditTestimonial ($id) {

        $testimonials = Testimonial::findOrFail($id);

        return view('admin.testimonial.edit_testimonial', compact('testimonials'));
    }

    // Update Testimonial
    public function UpdateTestimonial (Request $request) {

        $testimonial_id = $request->id;

        Testimonial::findOrFail($testimonial_id)->update([
            'testimonial_title' => $request->testimonial_title,
            'testimonial_description' => $request->testimonial_description,
            'testimonial_author' => $request->testimonial_author,
        ]);

        $notification = array(
           'message' => 'Testimonial updated successfully',
           'alert-type' => 'success',
        );

        return redirect()->route('all.testimonials')->with($notification);
    }

    // Delete slides
    public function DeleteTestimonial ($id) {

        Testimonial::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Testimonial deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
