<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::orderBy('id','desc')->get();
        return view('backend.project.index',compact('projects'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'cat_name' => 'required',
            'project_start' => 'required',
            'project_address' => 'required',
            'status' => 'required',
        ]);

        $current_id = Project::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'cat_name' => $request->cat_name,
            'project_start' => $request->project_start,
            'project_address' => $request->project_address,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('photo')) {

            //upload profile photo start
            $image = $request->file('photo');
            $name = 'project'."$current_id".".".$image->getClientOriginalExtension();
            $destination = public_path('storage/uploads/projects');
            $image->move($destination,$name);
            Project::findOrFail($current_id)->update([
                'photo' => $name,
            ]);

        }

        return back()->with('message','Project Added Successfully');

    }

    public function destroy(Request $request)
    {
        $name = Project::findOrFail($request->id)->photo;
        $old_photo_location = public_path('storage/uploads/projects').$name;
        unlink($old_photo_location);

        $slider_delete = Project::findOrFail($request->id);
        $slider_delete->delete();

        return back()->with('message','Project Delete Successfully');

    }
}
