<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Contact;


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

    function save_aboutus(Request $request)
    {
        if(AboutUs::create($request->all())){
             return $request->all();
        }
       
    }

    function contactmail(Request $request){

        // dd($request->all());
        ( Contact::create($request->all()) ) ?    :  'fail' ;

    }

    function whyus()
    {
        return view('admin.aboutus');
    }

    function screenshots()
    {
        return view('admin.aboutus');
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
