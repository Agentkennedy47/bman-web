<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlide; 
use Image;
use Illuminate\Support\Carbon;

class HomeSlideController extends Controller
{
    // Display all slides
    public function AllSlides () {

        $slides = HomeSlide::latest()->get();

        return view('admin.slide.all_slides', compact('slides'));
    }

    // Add slides
    public function AddSlides () {

        return view('admin.slide.add_slides');
    }

    // Store slides
    public function StoreSlides (Request $request) {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'slide_image' => 'required'
        ],

        [
            // 'title.required' => 'Slide title is required',
            // 'description.required' => 'Slide description is required',
            // 'slide_image.required' => 'Slide image is required',
        ]);

        $image = $request->file('slide_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(1500, 857)->save('upload/slides/'.$name_gen);
        $save_url = 'upload/slides/'.$name_gen;

        HomeSlide::insert([
            'title' => $request->title,
            'description' => $request->description,
            'call_action' => $request->call_action,
            'slide_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Slides inserted successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.slides')->with($notification);
    } 

    // Edit slides
    public function EditSlides ($id) {

        $slides = HomeSlide::findOrFail($id);

        return view('admin.slide.edit_slides', compact('slides'));
    }

    // Update slides
    public function UpdateSlides (Request $request) {

        $slide_id = $request->id;

        if($request->file('slide_image')){
            $image = $request->file('slide_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(1500, 857)->save('upload/slides/'.$name_gen);
            $save_url = 'upload/slides/'.$name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'call_action' => $request->call_action,
                'slide_image' => $save_url,
            ]);

            $notification = array(
               'message' => 'Slides updateed successfully',
               'alert-type' => 'success',
            );

            return redirect()->route('all.slides')->with($notification);
        }else{

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'call_action' => $request->call_action,
            ]);

            $notification = array(
                'message' => 'Slide updated without image successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.slides')->with($notification);
        }
    }

    // Delete slides
    public function DeleteSlides ($id) {

        $deleteSlides = HomeSlide::findOrFail($id);
        $img = $deleteSlides->slide_image;
        
        unlink($img);

        HomeSlide::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Slide deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
