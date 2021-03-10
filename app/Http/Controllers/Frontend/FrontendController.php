<?php

namespace App\Http\Controllers\Frontend;

use App\Client;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Project;
use App\Slider;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{

    public  function index (){
        $sliders = Slider::all();
        return view('frontend.pages.index',compact('sliders'));
    }
    public  function about (){
        $clients= Client::all();
        return view('frontend.pages.about',compact('clients'));
    }
    public  function service (){
        return view('frontend.pages.service');
    }
    public  function contact (){
        return view('frontend.pages.contact');
    }
    public  function portfolio (){
        $portfolios = DB::table('portfolios')
            ->join('projects','projects.id','=','portfolios.project_id')
            ->select('projects.cat_name','projects.title','projects.id','portfolios.*')
            ->get();
        return view('frontend.pages.portfolio',compact('portfolios'));
    }
    public  function project (){
        $projects = Project::orderBy('id','desc')->get();
        return view('frontend.pages.project',compact('projects'));
    }
    public  function singleProject ($id){
        $id = Crypt::decrypt($id);
        $projects = Project::where('id',$id)->first();
        return view('frontend.pages.singleProject',compact('projects'));
    }
    public function career(){
        return view('frontend.pages.career');
    }
    public function team(){
        return view('frontend.pages.team_list');
    }
    public function team_member($name){
        $team_members = Team::where('name',$name)->first();
        return view('frontend.pages.team_member', compact('team_members'));
    }
    public function blog(){
        return view('frontend.pages.blog');
    }
    public function blog_view(){
        return view('frontend.pages.blog_view');
    }
}
