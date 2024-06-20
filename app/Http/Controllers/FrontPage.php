<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPage extends Controller
{
    public function index(){
        $title="Preschool Website";
        return view('index',compact('title'));
    }
    public function about(){
        $title="About Us";
        return view('about',compact('title'));
    }
    public function classes(){
        $title="Classes";
        return view('classes',compact('title'));
    }
    public function appointment(){
        $title="Appointment";
        return view('appointment',compact('title'));
    }
    public function calltoaction(){
        $title="Become A Teacher";
        return view('calltoaction',compact('title'));
    }

    
    public function team(){
        $title = "Teachers";
        return view('team', compact('title'));
    }
    public function error(){
        $title = "404 Error";
        return view('error', compact('title'));
    }
    public function contact(){
        $title = "Contact Us";
        return view('contact', compact('title'));
    }
    public function facility(){
        $title = "Facility";
        return view('facility', compact('title'));
    }
    public function testimonial(){
        $title = "Testimonial";
        return view('testimonial', compact('title'));
    }
}
