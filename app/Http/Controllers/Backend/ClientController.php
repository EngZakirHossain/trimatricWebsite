<?php

namespace App\Http\Controllers\Backend;

use App\Client;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::orderBy('id','desc')->get();
        return view('backend.client.index',compact('clients'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'photo' => 'required',
        ]);

        $current_id = Client::insertGetId([
            'title' => $request->title,
            'link' => $request->link,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('photo')) {

            //upload profile photo start
            $image = $request->file('photo');
            $name = 'client'."$current_id".".".$image->getClientOriginalExtension();
            $destination = public_path('uploads/clients/');
            $image->move($destination,$name);
            Client::findOrFail($current_id)->update([
                'photo' => $name,
            ]);

        }

        return back()->with('message','Client Added Successfully');

    }

    public function destroy(Request $request)
    {
        $name = Client::findOrFail($request->id)->photo;
        $old_photo_location = public_path('uploads/clients/').$name;
        unlink($old_photo_location);

        $slider_delete = Client::findOrFail($request->id);
        $slider_delete->delete();
        return back()->with('message','Client Delete Successfully');
    }
}
