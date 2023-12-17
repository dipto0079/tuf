<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $data['title']="LeadTech Solution";
        return view('page.index',$data);
    }

    public function aboutUs(){
        $data['title']="About Us";
        return view('page.aboutUs',$data);
    }

    public function contactUs(){
        $data['title']="Contact Us";
        return view('page.contactUs',$data);
    }
}
