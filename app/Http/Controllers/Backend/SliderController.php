<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Slider;
use Carbon\Carbon;
use File;
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
            'photo' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $current_id = Slider::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('photo')) {

            //upload profile photo start
            $image = $request->file('photo');
            $name = ($request->title). "." . date('Y-m-d') . "." . time() . "." . 'slider' . "." . $image->getClientOriginalExtension();
            $destination = public_path('storage/uploads/slider');
            $image->move($destination,$name);
            Slider::findOrFail($current_id)->update([
                'photo' => $name,
            ]);

        }

        return back()->with('slider_added','Slider Added Successfully');

    }

    public function edit($id){
        $slider = Slider::find($id);
        return view('backend.slider.edit', compact('slider'));
    }

    public function update(Request $request){

    }


    public function destroy(Request $request)
    {

        $image = Slider::findOrFail($request->id);
        $image_path = public_path("storage/uploads/slider/{$image->photo}");

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $slider = Slider::find($request->id);
        $slider->delete();
        return redirect()->back()->with('slider_added','Slider Delete Successfully');
    }
}
