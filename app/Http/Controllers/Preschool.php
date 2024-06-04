<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Preschool extends Controller
{
    public function home(){
        $title="preschool homepage";
        return view('home',compact('title'));
    }
    public function about(){
        $title="preschool about";
        return view('about',compact('title'));
    }

    public function classes(){
        $title="preschool classes";
        return view('classes',compact('title'));
    }

    public function contactUs(){
        $title="preschool Contact Us";
        return view('contactUs',compact('title'));
    }

    public function appointment(){
        $title="preschool appointment";
        return view('appointment',compact('title'));
    }

    public function becomeTeacher(){
        $title="preschool become Teacher";
        return view('becomeTeacher',compact('title'));
    }

    public function error(){
        $title="preschool 404 Error";
        return view('error',compact('title'));
    }

    public function facility(){
        $title="preschool facilities";
        return view('facility',compact('title'));
    }

    public function testimonial(){
        $title="preschool testimonial";
        return view('testimonial',compact('title'));
    }
    public function team(){
        $title="preschool team";
        return view('team',compact('title'));
    }
}
