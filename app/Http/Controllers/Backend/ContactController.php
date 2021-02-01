<?php

namespace App\Http\Controllers\Backend;

use App\Client;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();
    }
    public function view()
    {
        $contacts = Contact::orderBy('id','desc')->get();
        return view('backend.contact.index', compact('contacts'));

    }
    public function destroy(Request $request)
    {
        $delete = Contact::findOrFail($request->id);
        $delete->delete();
        return back()->with('message','Contact Delete Successfully');

    }
}
