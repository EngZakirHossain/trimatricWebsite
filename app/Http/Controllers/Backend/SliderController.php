<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $slider_infos = Slider::orderBy('id','desc')->get();
        return view('backend.slider.index',compact('slider_infos'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

        $current_id = Slider::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('photo')) {

            //upload profile photo start
            $image = $request->file('photo');
            $name = 'slider'."$current_id".".".$image->getClientOriginalExtension();
            $destination = public_path('backend/uploads/slider_photos/');
            $image->move($destination,$name);
            Slider::findOrFail($current_id)->update([
                'photo' => $name,
            ]);

        }

        return back()->with('slider_added','Slider Added Successfully');

    }

    public function destroy(Request $request)
    {
        $name = Slider::findOrFail($request->id)->photo;
        $old_photo_location = public_path('backend/uploads/slider_photos/').$name;
        unlink($old_photo_location);

        $slider_delete = Slider::findOrFail($request->id);
        $slider_delete->delete();

        return back()->with('message','Slider Delete Successfully');

    }
}
