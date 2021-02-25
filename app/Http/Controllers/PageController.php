<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('frontend.pages.index');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function services(){
        return view('frontend.pages.services');
    }
    public function services_details(){
        return view('frontend.pages.services_details');
    }
    public function gallery(){
        return view('frontend.pages.gallery');
    }
    public function gallery_02(){
        return view('frontend.pages.gallery_02');
    }
    public function gallery_03(){
        return view('frontend.pages.gallery_03');
    }
    public function blog(){
        return view('frontend.pages.blog');
    }
    public function blog_details(){
        return view('frontend.pages.blog_details');
    }
    public function blog_grid(){
        return view('frontend.pages.blog_grid');
    }
    public function blog_list(){
        return view('frontend.pages.blog_list');
    }
    public function testimonials(){
        return view('frontend.pages.testimonials');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
}
