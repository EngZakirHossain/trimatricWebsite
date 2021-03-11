<?php

namespace App\Http\Controllers\Backend;

use App\Client;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use File;
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
            'photo' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
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
            $destination = public_path('storage/uploads/clients');
            $image->move($destination,$name);
            Client::findOrFail($current_id)->update([
                'photo' => $name,
            ]);

        }

        return back()->with('message','Client Added Successfully');

    }

    public function destroy(Request $request)
    {
        $image = Client::findOrFail($request->id);
        $image_path = public_path("storage/uploads/clients/{$image->photo}");

        if (File::exists($image_path)) {
            unlink($image_path);
        }

        $client = Client::find($request->id);
        $client->delete();
        return redirect()->back()->with('message','Client Delete Successfully');
    }

    public function client(){
        $clients = Client::orderBy('id','desc')->get();
        return view('frontend.pages.client',compact('clients'));
    }

}
