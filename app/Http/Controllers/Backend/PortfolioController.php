<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::orderBy('id','desc')->get();
        return view('backend.portfolio.index',compact('portfolios'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ]);

        $current_id = Portfolio::insertGetId([
            'project_id' => $request->project_id,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('photo')) {

            //upload profile photo start
            $image = $request->file('photo');
            $name = "$request->project_id".'('."$current_id".')'.".".$image->getClientOriginalExtension();
            $destination = public_path('storage/uploads/portfolio');
            $image->move($destination,$name);
            Portfolio::findOrFail($current_id)->update([
                'photo' => $name,
            ]);

        }

        return back()->with('message','Portfolio Added Successfully');

    }

    public function edit(){

    }

    public function destroy(Request $request)
    {
        $name = Portfolio::findOrFail($request->id)->photo;
        $old_photo_location = public_path('storage/uploads/portfolio').$name;
        unlink($old_photo_location);

        $slider_delete = Portfolio::findOrFail($request->id);
        $slider_delete->delete();

        return back()->with('message','Portfolio Delete Successfully');

    }
}
