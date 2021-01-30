<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Project;
use App\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public  function index (){
        $sliders = Slider::all();
        return view('frontend.pages.index',compact('sliders'));
    }
    public  function about (){
        return view('frontend.pages.about');
    }
    public  function service (){
        return view('frontend.pages.service');
    }
    public  function contact (){
        return view('frontend.pages.contact');
    }
    public  function portfolio (){
        return view('frontend.pages.portfolio');
    }
    public  function project (){
        $projects = Project::orderBy('id','desc')->get();
        return view('frontend.pages.project',compact('projects'));
    }
    public  function singleProject ($id){
        $projects = Project::where('id',$id)->first();
        return view('frontend.pages.singleProject',compact('projects'));
    }

}
