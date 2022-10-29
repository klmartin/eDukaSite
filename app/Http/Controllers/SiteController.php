<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\introduction;
use App\Models\Feature;


class SiteController extends Controller
{
    //

    function dashboard()
    {
        return view('admin.dashboard');
    }

    function aboutus()
    {
        return view('admin.aboutus');
    }

    function add_aboutus()
    {
        return view('admin.add_aboutus');
    }

    function addIntroduction()
    {
        return view('admin.add_introduction');
    }

    function firstSection()
    {
        $introduction = introduction::all();
        return view('admin.first_section',compact('introduction'));
    }

    function save_Introduction(Request $request)
    {
        $status = '';
        ( introduction::create($request->all()) ) ? $status = 'success' : $status = 'failure' ;
        return $status;

    }

    function save_aboutus(Request $request)
    {
        if(AboutUs::create($request->all())){
             return $request->all();
        }
       
    }

    function save_Feature(Request $request)
    {
        $status = '';
        ( Feature::create($request->all()) ) ? $status = 'success' : $status = 'failure' ;
        return $status;
    }

    function add_screenshots()
    {
        return view('admin.add_screenshots');
    }

    function add_features()
    {
        $features = Feature::all();
        return view('admin.add_features',compact('features'));
    }

    function contactmail(Request $request){
        // dd($request->all());
        ( Contact::create($request->all()) ) ?    :  'fail' ;

    }

    function whyus()
    {
        return view('admin.whyus');
    }

    function features()
    {
        $features = Feature::all();
        return view('admin.features',compact('features'));
    }

    function screenshots()
    {
        return view('admin.screenshots');
    }
    
    function packages()
    {
        return view('admin.aboutus');
    }

    function contact()
    {   
        return view('admin.aboutus');
    }

    
}
