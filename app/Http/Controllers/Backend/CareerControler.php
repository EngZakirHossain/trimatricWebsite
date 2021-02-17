<?php

namespace App\Http\Controllers\Backend;

use App\Circular;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerControler extends Controller
{
    public function create(){
        return view('backend.circular.create');
    }

    public function index(){
        $circular = Circular::orderBy('id','desc')->get();
        return view('backend.circular.index', compact('circular'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'vacancy' => 'required',
            'workplace' => 'required',
            'date' => 'required',
            'salary' => 'required',
            'type' => 'required',
            'job_context' => 'required',
            'responsibilities' => 'required',
            'educational' => 'required',
            'experience' => 'required',
            'additional' => 'required',
            'others' => 'required',
        ]);

        $data = $request->all();

        Circular::create($data);
        return redirect()->back()->with('message','Circular Published Successfully');
    }

}
